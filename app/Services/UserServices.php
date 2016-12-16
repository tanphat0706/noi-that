<?php
namespace App\Services;

use DB;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserProfileRequest;

/**
 * User Services to handle the management users
 *
 * @author Minhnc
 *         2016/03/14
 *
 */
class UserServices
{

    /**
     * Store user
     *
     * @param UserRequest $request
     * @return boolean
     */
    public function storeUser(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = trim($request->name);
            $user->email = trim($request->email);
            $user->password = Hash::make($request->password);
            $user->group_id = $request->user_group;

            $result = $user->save();

            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollback();
            $result = false;
        }
    }

    /**
     * Update user to database
     *
     * @param unknown $id
     * @param UserRequest $request
     */
    public function updateUser($id, UserRequest $request)
    {
        DB::beginTransaction();

        try {
           // dd($request->is_customer);
            $user = User::findOrFail($id);

            $userGroup = $request->user_group;

            if ($request->password) {
                $result = $user->update([
                    'name' => trim($request->name),
                    'email' => trim($request->email),
                    'group_id' => $userGroup,
                    'password' => Hash::make($request->password)
                ]);
            } else {
                $result = $user->update([
                    'name' => trim($request->name),
                    'email' => trim($request->email),
                    'group_id' => $userGroup
                ]);
            }

            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollback();
            return false;
        }
    }

    /**
     * Delete user
     *
     * @param unknown $id
     * @return boolean
     */
    public function destroyUser($id)
    {
        try {
            DB::beginTransaction();

            $user = User::find($id);
            $result = User::where('id', $id)->delete();

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            $result = false;
        }
        return $result;
    }

    /**
     * Store profile for user
     *
     * @param UserProfileRequest $request
     */
    public function storeProfile(UserProfileRequest $request)
    {
        $user = new User();
        try {
            DB::beginTransaction();

            if ($request->password) {
                $result = $user->where('id', '=', Auth::user()->id)->update([
                    'name' => trim($request->name),
                    'password' => Hash::make($request->password)
                ]);
            } else {
                $result = $user->where('id', '=', Auth::user()->id)->update([
                    'name' => trim($request->name)
                ]);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            $result = false;
        }
        return $result;
    }
}