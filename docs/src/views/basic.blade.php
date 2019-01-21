@extends('_layout')

@section('content')
	
	<h1>
		Basic Demo
	</h1>
	
	@if(request()->request->count())
		<?php dump(request()->all()); ?>
	@endif
	
	<pre><code class="language-php">@verbatim{{ Aire::open() }}
	
{{ Aire::input()
	->label('Demo Input')
	->id('demo')
	->helpText('This is demo help text.') }}

{{ Aire::select(['Option 1', 'Option 2'])
    ->label('Demo Select') }}

{{ Aire::textarea()
	->value('Demo text area') }}

{{ Aire::checkbox()
	->label('Demo check box') }}

// Radio groups must have a name
{{ Aire::radioGroup('demo_radios', ['one' => 'Option 1', 'two' => 'Option 2'])
	->defaultValue('two')
	->label('Demo radio group') }}

{{ Aire::submit('Demo Submit Button') }}

{{ Aire::close() }}@endverbatim</code></pre>
	
	<h2>Resulting Form</h2>
	
	{{ Aire::open()->post()->multipart() }}
	
	{{ Aire::input()
		->label('Demo Input')
		->id('demo')
		->helpText('This is demo help text.') }}
	
	{{ Aire::select(['Option 1', 'Option 2'])
	    ->label('Demo Select') }}
	
	{{ Aire::textarea()->value('Demo text area') }}
	
	{{ Aire::checkbox()->label('Demo check box') }}
	
	{{ Aire::radioGroup('foo', ['one' => 'Option 1', 'two' => 'Option 2'])
		->defaultValue('two')
		->label('Demo radio group') }}
	
	{{ Aire::checkboxGroup('bar', ['one', 'two', 'three', 'four'])
		->defaultValue(['two', 'three'])
		->label('Demo checkbox group') }}
	
	{{ Aire::submit('Demo Button') }}
	
	{{ Aire::close() }}

@endsection
