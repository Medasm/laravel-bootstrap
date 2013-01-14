<?php

class User_Task {

    public function create($arguments)
    {
        if (sizeof($arguments) < 2)
        {
        	echo 'Usage:  user:create <email> <password>';
        	return;
        }

        $user = new User;
        $user->email = $arguments[0];
        $user->password = Hash::make($arguments[1]);
        $user->save();
    }

}
