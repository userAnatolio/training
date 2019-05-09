<div class="eee">Шило на мыло</div>
<div class="eee">Шило на мыло</div>

<script>

// Модифицируйте класс Elem из предыдущей задачи так, чтобы он мог работать не только с одним элементом, но и одновременно с группой, как это сделано в jQuery. 
// Кроме того: реализуйте еще и метод each, который будет работать также, как и each из jQuery.

class Elem
{
	constructor(selector)
	{
		this.elem = document.getElementsByTagName(selector);
	}
	
	html(text)
	{
		for (var i = 0; i < this.elem.length; i++) {
		this.elem[i].innerHTML = text;
		}
		return this;
	}
	
	append(text)
	{
		for (var i = 0; i < this.elem.length; i++) {
		this.elem[i].innerHTML = this.elem[i].innerHTML + text;
		}
		return this;
	}
	
	prepend(text)
	{
		for (var i = 0; i < this.elem.length; i++) {
		this.elem[i].innerHTML = text + this.elem[i].innerHTML;
		}
		return this;
	}
	
	attr(attrib, text)
	{
		for (var i = 0; i < this.elem.length; i++) {
		this.elem[i].setAttribute(attrib, text);
		}
		return this;
	}
	
	getHTML()
	{
		for (var i = 0; i < this.elem.length; i++) {
		document.write(this.elem[i].innerHTML);
		}
	}
	
	each(func)
	{
		for (var i = 0; i < this.elem.length; i++) {
		func(this);
		}
		return this;
	}
	
}


var elem = new Elem('div');

elem.html('!'); //запишет в текст элемента '!'
elem.append('!'); //запишет в начало элемента '!'
elem.prepend('!'); //запишет в конец элемента '!'
elem.attr('class', 'www'); //запишет в атрибут class значение www

//Должны работать цепочки методов:
elem.html('hello').append('!').prepend('!');
elem.attr('class', 'www').attr('title', 'hello');
elem.each(function (test){ console.log(test.getHTML()); });
console.log(elem);

</script>
