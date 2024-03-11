
<html>
<body>
    <h1>listar alunos</h1>
    @error('erro')
        <p>{{$message}}</p>
    @enderror
    @foreach($alunos as $aluno)
        <input type="text" value="{{$aluno->nome}}">
        <input type="email" value="{{$aluno->email}}">
        <input type="date" value="{{$aluno->data_nascimento}}">
    @endforeach

</body>
</html>
