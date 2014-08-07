
    <h1>Details of our text</h1>
    
        <?= Form::open() ?>
        <?= Form::label('paragraphs', 'Paragraphs', array('class' => 'awesome')) ?>
        <?= Form::text('paragraphs') ?>
        <br>
        <?= Form::submit('Give me my text!') ?>
        <?= Form::close() ?>
    