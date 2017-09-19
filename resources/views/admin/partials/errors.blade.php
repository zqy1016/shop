@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>矮油！！</strong>
        There were some problems with your input.（意思是报错啦赶紧看看吧老妹儿！）<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif