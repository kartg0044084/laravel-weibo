<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 取得去除掉ID為1的所有使用者ID
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // 追蹤除了1號使用者之外的所有使用者
        $user->follow($follower_ids);

        // 除了1號使用者以外的所有使用者都來追蹤1號使用者
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
