<?php
/**
 * @author  Phat Le
 */
namespace App\Http\Controllers;

use Request;
use App\User;
use App\UserGroup;
use Response;
use Datatables;
use Session;
use Auth;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserProfileRequest;
use App\Services\UserServices;

/**
 * User controller to handle the management users
 *
 * @author Phatle
 *         2016/07/06
 *
 */
class UserController extends Controller
{

    public function __construct(UserServices $userServices, User $user)
    {
        $this->userServices = $userServices;
        $this->user = $user;
    }

    /**
     * Display a listing of the users.
     *
     * @return Response
     */
    public function index()
    {
        if (! Auth::user()->hasRole('viewUsersList')) {
            abort('403');
        }
        return view('user.list');
    }

    /**
     * get list users to datatables
     *
     * @param
     *            Request
     * @return Response
     */
    public function getUsersJson()
    {
        if (! Auth::user()->hasRole('viewUsersList')) {
            abort('403');
        }
        $user = User::select('users.id as userId', 'users.group_id', 'users.name as userName', 'users.email', 'users_groups.name as groupName', 'users.created_at')
            ->leftJoin('users_groups', 'users.group_id', '=', 'users_groups.id');
        $buttons = array();
        return Datatables::of($user)
            ->addColumn('action', function ($user) {
                $buttons = array();
                if (Auth::user()->hasRole('editUser')) {
                    $buttons[] = [
                        'href' => 'user/edit/' . e($user->userId),
                        'icon' => 'edit',
                        'type' => 'primary',
                        'label' => trans('system.edit')
                    ];
                }
                if (Auth::user()->hasRole('deleteUser')) {
                    $formId = 'delete-user-' . e($user->userId);
                    $buttons[] = [
                        'href' => '#' . e($user->userId),
                        'icon' => 'remove',
                        'type' => 'danger',
                        'delete' => e($user->userId),
                        'id' => $formId,
                        'route' => 'delete-user',
                        'label' => trans('system.del'),
                        'htmlOptions' => [
                            "onclick" => "confirmDelete('$formId')"
                        ]
                    ];
                }

                $action = view('partial.action', compact('buttons'))->render();
                return (string)$action;
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
        if (! Auth::user()->hasRole('addUser')) {
            abort('403');
        }
        $userGroup = array_add(UserGroup::all()->lists('name', 'id'), '', trans('user.choose_group'));
        return view('user.create', compact('userGroup'));
    }

    /**
     * Store a user created.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {
        if (! Auth::user()->hasRole('addUser')) {
            abort('403');
        }
        $result = $this->userServices->storeUser($request);
        if ($result) {
            Session::flash('message', trans('user.created'));
            return redirect()->route('users-list');
        } else {
            return redirect()->back()->withErrors(trans('system.can_not_save'));
        }
    }

    /**
     * Show the form for editing the user
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        if (! Auth::user()->hasRole('editUser')) {
            abort('403');
        }
        $user = User::find($id);
        $userGroup = UserGroup::all()->lists('name', 'id');

        return view('user.edit', compact('user','userGroup'));
    }

    /**
     * Update user.
     *
     * @param int $id
     * @return Response
     */
    public function update($id, UserRequest $request)
    {
        if (! Auth::user()->hasRole('editUser')) {
            abort('403');
        }
        $result = $this->userServices->updateUser($id, $request);

        if ($result) {
            Session::flash('message', trans('user.updated'));
            return redirect()->route('users-list');
        } else {
            return redirect()->back()->withErrors(trans('system.can_not_save'));
        }
    }

    /**
     * Delete user
     *
     * @param unknown $id
     */
    public function destroy($id)
    {
        if (! Auth::user()->hasRole('deleteUser')) {
            abort('403');
        }

        if (Auth::id() != $id) {
            $result = $this->userServices->destroyUser($id);
        } else {
            $result = null;
            if ($id == 1 || $id == 2) {
                Session::flash('error', trans('user.not_delete_supper_admin'));
            } else {
                Session::flash('error', trans('user.not_delete_yourself'));
            }

        }

        if ($result) {
            Session::flash('message', trans('user.deleted'));
            return redirect()->route('users-list');
        }
    }

    /**
     * Edit profile for user
     */
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('user.profile', compact('user'));
    }

    /**
     * Update user profile.
     *
     * @param int $id
     * @return Response
     */
    public function updateProfile(UserProfileRequest $request)
    {
        $result = $this->userServices->storeProfile($request);
        if ($result) {
            Session::flash('message', trans('user.edited_profile'));
            return redirect()->route('profile');
        } else {
            return redirect()->back()->withErrors(trans('system.can_not_save'));
        }
    }
}
