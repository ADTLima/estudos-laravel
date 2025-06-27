<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" type="text" value="{{ old('nome') }}" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))
        <div class="alert alert-danger">
            {{ $errors->first('nome') }}
        </div>
        
    @endif
    <input name="telefone" type="text" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}">
    @if ($errors->has('telefone'))
        <div class="alert alert-danger">
            {{ $errors->first('telefone') }}
        </div>
        
    @endif
    <input name="email" type="text" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}">
    @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
        
    @endif
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        <div class="alert alert-danger">
            {{ $errors->first('motivo_contatos_id') }}
        </div>
        
    @endif
    <textarea name="mensagem"  class="{{ $classe }}">{{old('mensagem') != ' ' ? old('mensagem') : 'Digite aqui a sua mensagem'}}</textarea>
    @if ($errors->has('mensagem'))
        <div class="alert alert-danger">
            {{ $errors->first('mensagem') }}
        </div>  
    @endif
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
{{-- 
@if($errors->any())
    @foreach ($errors->all() as $erro )
        <div class="alert alert-danger">
            {{ $erro }}
        </div>
        
    @endforeach

@endif
 --}}