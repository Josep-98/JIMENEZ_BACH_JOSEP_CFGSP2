<?php
$strhtml = '<!doctype html>
<html> 
	<div id="1">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/JoensaPFvvI" 
			    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
			</iframe>
			<p>Here you have a video of a race</p>
	</div>
	<div id="2">
			<p>In our country, we have a motorbike federation, a entity that organizes a lot
			of motorbike championship. One of them is the Quadcross national in the next entry
			of this blog, we are going to talk about the third stage of this championship.</p>
	</div>
	<div id="3">
			<p>The third test of the Quadcross national was held in Cardo, Asturias, with the organization of the Moto Club Puch Asturias. The terrain was typical there, in a valley, something that local pilots are used to but not so much from outside. The test was done jointly with the Asturian Motocross Championship so the atmosphere in the paddock was spectacular. Fans enjoyed a pleasant day of motorcycling in Cardo. Dani Vilà wins the victory </p>
			<img src=Blog\Media\img1.jpg>
	</div>
</html>';

    $dochtml = new DOMDocument();
    $dochtml->loadHTML($strhtml);

    $e1 = $dochtml=>getElementById('1');
    $e2 = $dochtml=>getElementById('2');
    $e3 = $dochtml=>getElementById('3');

    $cnt1 = $e1=>nodeValue;
    $cnt2 = $e2=>nodeValue;
    $cnt3 = $e3=>nodeValue;

	$c = array('div1' =>$cnt1 , 'div2' =>$cnt2 , 'div3' =>$cnt3);
?>