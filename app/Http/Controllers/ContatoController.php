<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Exibe o formulário de contato.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('contato');
    }

    /**
     * Processa o formulário de contato.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processForm(Request $request)
    {
        // Aqui você faria a validação dos dados
      $validated = $request->validate([
    'name' => 'required|max:255',
    'email' => 'required|email',
    'message' => 'required',
]);

        // Aqui você faria o envio do email ou salvaria no banco de dados
        // Por enquanto, vamos apenas exibir uma mensagem de sucesso
        return redirect('/')->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}