<?php

/**
 *
 *
 * @version $Id$
 * @copyright 2011
 */

$contentId = isset($_POST['page']) ? $_POST['page'] : NULL;

if(!is_null($contentId))
{

	switch($contentId)
	{

		case 'page2':

			echo '
					<h1>Some other content 2</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque consequat ante, sit amet sollicitudin quam congue imperdiet. Ut feugiat posuere turpis ac feugiat. Donec tristique, ante dignissim dictum ornare, purus enim consectetur nunc, id malesuada ante neque nec arcu. Maecenas at eros nunc, id malesuada massa. Morbi blandit ligula sit amet diam bibendum ornare. Nunc gravida rhoncus dui nec facilisis. Integer massa dui, porta sodales consequat at, fermentum id purus. Suspendisse posuere nunc id enim cursus pretium. Nunc et tincidunt sapien. Sed semper tortor at erat porta dictum.</p>

					<p>Duis consectetur quam vel mi accumsan fringilla. Nam aliquam sem at risus molestie malesuada. Donec velit eros, fringilla ut sollicitudin nec, hendrerit in dolor. Quisque luctus elementum rutrum. Sed malesuada urna lectus, ut tempus leo. Nunc accumsan auctor mi, sed congue magna rutrum commodo. Nam turpis felis, suscipit ac accumsan eget, interdum in odio. Praesent venenatis augue a diam laoreet aliquet scelerisque vel sapien. Vivamus vel dui turpis. Morbi placerat consequat placerat. Proin pharetra pretium imperdiet. Nulla euismod mi neque, vitae scelerisque urna. Vivamus laoreet pretium posuere. Sed dictum vulputate metus eget aliquam. Pellentesque porttitor porttitor odio, nec adipiscing velit fermentum hendrerit. Nullam non eros a mi tempus laoreet sed vel tortor.</p>

					<h2>Some heading</h2>

					<p>Quisque consequat facilisis faucibus. Sed lacus justo, tempus malesuada suscipit quis, vehicula non justo. Aenean sed lorem lobortis velit pretium viverra. Donec mi dui, consequat quis placerat non, convallis nec leo. Praesent euismod cursus mi, eu accumsan eros suscipit non. Maecenas sed risus urna, semper convallis ante. Praesent feugiat sodales vestibulum. Cras a massa libero, vel facilisis nibh. Ut faucibus augue id nisl tempor tincidunt. Vestibulum id massa magna. Nam eu justo eros, eget tempus erat. Nunc venenatis, diam in pellentesque ultrices, risus quam accumsan risus, sit amet bibendum sem est eget sem. Proin at libero a arcu aliquet laoreet et quis mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>';

			break;

		case 'page3':

			echo '
					<h1>3rd page of content</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elsa. Morbi blandit ligula sit amet diam bibendum ornare. Nunc gravida rhoncus dui nec facilisis. Integer massa dui, porta sodales consequat at, fermentum id purus. Suspendisse posuere nunc id enim cursus pretium. Nunc et tincidunt sapien. Sed semper tortor at erat porta dictum.</p>

					<p>Duis consectetur quam vel mi accumsan fringilla. Nam aliquam sem at risus molestie malesuada. Donec velit eros, fringilla ut sollicitudin nec, hendrerit in dolor. Quisque luctus elementum d dictum vulputate metus eget aliquam. Pellentesque porttitor porttitor odio, nec adipiscing velit fermentum hendrerit. Nullam non eros a mi tempus laoreet sed vel tortor.</p>

					<h2>A minor heading</h2>

					<p>Quisque consequat facilisis faucibus. Sed lacus justo, tempus malesuada suscipit quis, vehicula non justo. Aenean sed lorem lobortis velit pretium viverra. Donec mi dui, consequat quis placerat non, convallis nec leo. Praesent euismod cursus mi, eu accumsan eros suscipit non. Maecenas sed risus urna, semper convallis ante. Praesent lia Curae; </p>';

			break;

		case 'page4':

			echo '
					<h1>Welcome to page 4!</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elsa. Morbi blandit ligula sit amet diam bibendum ornare. Nunc gravida rhoncus dui nec facilisis. Integer massa dui, porta sodales consequat at, fermentum id purus. Suspendisse posuere nunc id enim cursus pretium. Nunc et tincidunt sapien. Sed semper tortor at erat porta dictum. Duis consectetur quam vel mi accumsan fringilla. Nam aliquam sem at risus molestie malesuada. Donec velit eros, fringilla ut sollicitudin nec, hendrerit in dolor. Quisque luctus elementum d dictum vulputate metus eget aliquam. Pellentesque porttitor porttitor odio, nec adipiscing velit fermentum hendrerit. Nullam non eros a mi tempus laoreet sed vel tortor.</p>

					<p>Quisque consequat facilisis faucibus. Sed lacus justo, tempus malesuada suscipit quis, vehicula non justo. Aenean sed lorem lobortis velit pretium viverra. Donec mi dui, consequat quis placerat non, convallis nec leo. Praesent euismod cursus mi, eu accumsan eros suscipit non. Maecenas sed risus urna, semper convallis ante. Praesent lia Curae; </p>';

			break;

		case 'page5':

			echo '
					<h1>Content Page 5</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque consequat ante, sit amet sollicitudin quam congue imperdiet. Ut feugiat posuere turpis ac feugiat. Donec tristique, ante dignissim dictum ornare, purus enim consectetur nunc, id malesuada ante neque nec arcu. Maecenas at eros nunc, id malesuada massa. Fermentum id purus. Suspendisse posuere nunc id enim cursus pretium. Nunc et tincidunt sapien. Sed semper tortor at erat porta dictum.</p>

					<h2>Some heading</h2>

					<p>Duis consectetur quam vel mi accumsan fringilla. Morbi placerat consequat placerat. Proin pharetra pretium imperdiet. Nulla euismod mi neque, vitae scelerisque urna. Vivamus laoreet pretium posuere. Sed dictum vulputate metus eget aliquam. Pellentesque porttitor porttitor odio, nec adipiscing velit fermentum hendrerit. Nullam non eros a mi tempus laoreet sed vel tortor.</p>

					<h2>Some heading again!</h2>

					<p>Quisque consequat facilisis faucibus. Sed lacus justo, tempus malesuada suscipit quis, vehicula non justo. Aenean sed lorem lobortis velit pretium viverra. Donec mi dui, consequat quis placerat non. Nam eu justo eros, eget tempus erat. Nunc venenatis, diam in pellentesque ultrices, risus quam accumsan risus, sit amet bibendum sem est eget sem. Proin at libero a arcu aliquet laoreet et quis mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>';

			break;


	}

}

?>