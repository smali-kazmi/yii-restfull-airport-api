<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "create" permission
        $add = $auth->createPermission('create');
        $add->description = 'Can create';
        $auth->add($add);

        // add "update" permission
        $update = $auth->createPermission('update');
        $update->description = 'Can update';
        $auth->add($update);

        // add "delete" permission
        $delete = $auth->createPermission('delete');
        $delete->description = 'Can delete';
        $auth->add($delete);

        // add "read" permission
        $read = $auth->createPermission('read');
        $read->description = 'Can read';
        $auth->add($read);

        // add "user" role and give this role the "add" & "read" permission
        $user = $auth->createRole('user');
        $auth->add($user);
        $auth->addChild($user, $add);
        $auth->addChild($user, $read);

        // add "admin" role and give this role the "update" & "delete" permission
        // as well as the permissions of the "user" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $update);
        $auth->addChild($admin, $delete);
        $auth->addChild($admin, $user);

        // Assign roles to users. 101 and 100 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($user, 101);
        $auth->assign($admin, 100);


    }
}