
<html>
<body>
<h1>listar alunos</h1>
    <form method="post" action="{{route('atualizar.alunos')}}">
        @csrf

        <label for="id"><b>ID:</b></label>
        <input type="text" name="id" value="{{$aluno->id}}" required><br>

        <label for="nome"><b>Nome:</b></label>
        <input type="text" name="nome" value="{{$aluno->nome}}" required><br>

        <label for="email"><b>Email:</b></label>
        <input type="email" name="email" value="{{$aluno->email}}" required><br>

        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
        <input type="date" name="data_nascimento" value="{{$aluno->data_nascimento}}" required>

        <label for="curso"><b>Curso:</b></label>
        <input type="text" name="curso" value="{{$aluno->curso}}" required>




        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

</body>
</html>
