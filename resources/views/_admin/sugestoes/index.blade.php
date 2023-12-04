@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')
    <div class="table">
        <table>
            <thead>
                <tr>
                  <th>Nome</th>
                  <th>Sugestão</th>
                  <th>Aprovado</th>
                  <th>Votos</th>
                  <th>Listado</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Luis</td>
                  <td>asjodadsjda</td>
                  <td>S</td>
                  <td>102</td>
                  <td>Listado</td>
                  <td nowrap>
                    <a class="btn btn-xs btn-primary btn-p" href=""><i class="fas fa-eye fa-xs"></i></a>
                    <a class="btn btn-xs btn-warning btn-p" href=""><i class="fas fa-pen fa-xs"></i></a>
                    <form method="POST" action="" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?')">
                      @csrf

                      <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection
