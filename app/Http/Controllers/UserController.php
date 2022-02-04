<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserObj {
    public $id;
    public $nome;
    public $sobrenome;
    public $celular;
    public $email;
    public function __construct($id, $nome, $sobrenome, $celular, $email) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->celular = $celular;
        $this->email = $email;
    }
}

use App\Models\Userlist;

class UserController extends Controller
{
    public function userList() {
        $users = Userlist::all();
    
        $firstUser = new UserObj(1, 'Wilson', 'Salles Junior', '(14) 99722-3323', 'wilsonsallesjunior@gmail.com');
        $secondUser = new UserObj(2, 'Jhon', 'Doe', '(12) 34567-8900', 'jhondoe@gmail.com');
    
        $usuarios = [$firstUser, $secondUser];
        return view('users', ['usuarios' => $users]);

    }

    public function editUser($id) {
        return view('edit', ['id' => $id]);
    }

    public function deleteUser($id) {
        $usuario = Userlist::findOrFail($id);

        return view('delete', ['usuario' => $usuario]);
    }

    public function destroy($id) {
        $usuario = Userlist::findOrFail($id)->delete();

        return redirect('/lista');
    }
    
    public function creationUser() {
        return view('create');
    }

    public function store(Request $request) {
        $usuario = new UserList;

        $usuario->nome = $request->nome;
        $usuario->sobrenome = $request->sobrenome;
        $usuario->celular = $request->celular;
        $usuario->email = $request->email;

        
        $usuario->save();
        return redirect('/lista');
    }

    public function show($id) {
        $usuario = Userlist::findOrFail($id);

        return view('edit', ['usuario' => $usuario]);
    }



    public function update(Request $request) {
        Userlist::findOrFail($request->id)->update($request->all());

        return redirect('/lista');
    }
}
