<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The easiest way to create your own Lorem Ipsum</title>
	
    
</head>
<body>
    
    <header class="main-menu">
    
        
        
    </header>
    
    <h1>Details of our text</h1>
    
        <?= Form::open(array('class' => 'form') ?>
        <?= Form::label('paragraphs', 'Paragraphs', array(class => 'paragraphs-label')) ?>
        <?= Form::text('paragraphs', array(class => 'paragraphs-text')) ?>
        <?= Form::submit('Give me my text!') ?>
        <?= Form::close() ?>
    
</body>    
    
    
</body>
</html>
