<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add new roles
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\roles.csv';
        } else {
            $file = storage_path('app/csv/roles.csv');
        }

        $roles=csvToArray($file);
        foreach ($roles as $role){
            Role::create([
                'id' => $role["id"],
                'name' => $role["name"],
                'display_name' => $role["display_name"],
                'description' => $role["description"],
                'created_at' => $role["created_at"],
                'updated_at' => $role["updated_at"],
            ]);
        }


        //Add Permissions
        $insertUser = new Permission();
        $insertUser->name         = 'Insert-user';
        $insertUser->display_name = 'Insert Users'; // optional
        $insertUser->description  = 'Insert new users'; // optional
        $insertUser->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users'; // optional
        $editUser->description  = 'edit existing users'; // optional
        $editUser->save();

        $deleteUser = new Permission();
        $deleteUser->name         = 'delete-user';
        $deleteUser->display_name = 'Delete Users'; // optional
        $deleteUser->description  = 'delete existing users'; // optional
        $deleteUser->save();

        $insertJob = new Permission();
        $insertJob->name         = 'insert-job';
        $insertJob->display_name = 'Insert Job'; // optional
        $insertJob->description  = 'Insert a new job to the list'; // optional
        $insertJob->save();

        //Attach Permissions to Roles
//        $admin->attachPermissions(array($insertUser, $editUser, $deleteUser, $insertJob));
//        $operator->attachPermissions(array($insertUser, $editUser, $deleteUser, $insertJob));


    }
}
