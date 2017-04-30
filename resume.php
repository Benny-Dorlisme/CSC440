<?php
include("class.page.php");
include("class.bubbleletters.php");
class ResumePage extends Page{
	
	private $active_section   = null;
	private $bubble_letters = null;
	private $net_plus_logo = "<svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 width='100' viewBox='0 0 288 288' style='display:inline' xml:space='preserve'>
<style type='text/css'>
	.st10100{fill:#FFFFFF;}
	.st101{fill:#6A747C;}
	.st102{fill:#E2231A;}
</style>
<g>
	<g>
		<g>
			<path class='st10100' d='M145.2,50c-52.6,0-95.4,42.8-95.4,95.4c0,26.5,10.6,51.1,29.8,69.3l1,1l1.1-1c2.8-2.6,5.7-4.9,8.7-7.1
				c14.6,12.9,33.8,20.8,54.8,20.8c21,0,40.2-7.9,54.8-20.7c3,2.2,5.9,4.5,8.7,7.1l1.1,1l1-1c19.3-18.2,29.9-42.9,29.9-69.3
				C240.6,92.9,197.8,50,145.2,50z'/>
			<path class='st101' d='M145.2,50c-52.6,0-95.4,42.8-95.4,95.4c0,26.5,10.6,51.1,29.8,69.3l1,1l1.1-1c2.8-2.6,5.7-4.9,8.7-7.1
				c14.6,12.9,33.8,20.8,54.8,20.8c21,0,40.2-7.9,54.8-20.7c3,2.2,5.9,4.5,8.7,7.1l1.1,1l1-1c19.3-18.2,29.9-42.9,29.9-69.3
				C240.6,92.9,197.8,50,145.2,50z M145.2,225.4c-20,0-38.2-7.4-52.2-19.5c10.3-6.9,21.9-11.7,34.1-14.1v13h9.9v9.9h20.7
				c3,0,5.4-2.4,5.4-5.4v-17.6c12.3,2.4,23.9,7.2,34.3,14.1C183.3,218,165.1,225.4,145.2,225.4z M153.1,204.8v-13.1h6.8v17.6
				c0,1.3-1,2.3-2.3,2.3H140v-6.8H153.1z M140,201.7v-10.1h10.1v10.1H140z M150.1,188.6h-13.1v13.1h-6.8v-17.3
				c0-1.5,1.2-2.7,2.7-2.7h17.3V188.6z M199.7,203.8c-11-7.6-23.5-12.7-36.7-15.2h-9.9v-9.9h-20.3c-3.2,0-5.8,2.6-5.8,5.8v4.2
				c-13.1,2.5-25.5,7.6-36.5,15.1c-15.6-14.6-25.3-35.3-25.3-58.3c0-44.1,35.8-79.9,79.9-79.9s79.9,35.8,79.9,79.9
				C225.1,168.4,215.3,189.2,199.7,203.8z M209.6,211.5c-2.4-2.1-4.8-4.1-7.4-6c15.9-15.1,25.9-36.5,25.9-60.1c0-45.8-37.2-83-83-83
				s-83,37.2-83,83c0,23.6,9.9,44.9,25.8,60.1c-2.5,1.9-5,3.9-7.4,6c-17.9-17.5-27.8-40.9-27.8-66.1c0-50.9,41.4-92.4,92.4-92.4
				s92.4,41.4,92.4,92.4C237.5,170.6,227.6,194,209.6,211.5z'/>
			<path class='st102' d='M243.5,111.4H37.6v49.9c0,4.6,3.8,8.4,8.4,8.4h205.9v-49.9C251.8,115.1,248.1,111.4,243.5,111.4z'/>
			<g>
				<path class='st10100' d='M83.4,126.1h4.5v25.8h-3.8l-14.3-18.4v18.4h-4.5v-25.8h4.2L83.4,144V126.1z'/>
				<path class='st10100' d='M102.2,148.7c2.2,0,3.7-0.8,5.3-2.3l2.6,2.3c-1.8,2.2-4.4,3.7-8,3.7c-5.6,0-10-4.1-10-10.2
					c0-5.6,4-10.2,9.5-10.2c6.2,0,9.3,4.9,9.3,10.5c0,0.4,0,0.8-0.1,1.2H96.6C97.1,146.9,99.3,148.7,102.2,148.7z M106.5,140.8
					c-0.3-2.9-2-5.1-4.9-5.1c-2.7,0-4.7,2.1-5.1,5.1H106.5z'/>
				<path class='st10100' d='M119.4,145.8c0,1.7,0.9,2.4,2.4,2.4c1,0,1.9-0.2,2.8-0.7v3.7c-1.1,0.6-2.4,1-4,1c-3.3,0-5.6-1.4-5.6-5.7
					v-10.3h-2.5v-3.8h2.5v-5.4h4.5v5.4h5.2v3.8h-5.2V145.8z'/>
				<path class='st10100' d='M147.6,145.8l4-13.4h4.5l-6.4,19.6h-4l-4.4-13.3l-4.4,13.3h-4l-6.3-19.6h4.6l3.9,13.4l4.3-13.4h3.8
					L147.6,145.8z'/>
				<path class='st10100' d='M167.4,152.4c-5.9,0-10.3-4.5-10.3-10.1c0-5.6,4.4-10.2,10.4-10.2c6,0,10.4,4.5,10.4,10.2
					C177.9,147.8,173.4,152.4,167.4,152.4z M167.4,135.9c-3.6,0-5.9,2.8-5.9,6.2c0,3.5,2.5,6.3,5.9,6.3c3.6,0,5.9-2.8,5.9-6.2
					C173.4,138.8,170.9,135.9,167.4,135.9z'/>
				<path class='st10100' d='M185.8,151.9h-4.5v-19.5h4.5v4.4c1.2-2.9,3.5-4.9,6.9-4.8v4.7h-0.3c-3.9,0-6.6,2.5-6.6,7.7V151.9z'/>
				<path class='st10100' d='M213.5,151.9h-5.2l-5.9-8.4l-2.7,2.8v5.6h-4.5v-27h4.5v16.1l8.1-8.6h5.4l-7.8,7.9L213.5,151.9z'/>
				<path class='st10100' d='M220.9,129.8h4.2v7.1h7.1v4.1h-7.1v7.1h-4.2V141h-7.1v-4.1h7.1V129.8z'/>
			</g>
			<g>
				<g>
					<path class='st102' d='M121.3,92.1c-2.2,0-4,1.5-4,3.4c0,1.9,1.8,3.4,4,3.4c2.2,0,4-1.5,4-3.4C125.3,93.6,123.5,92.1,121.3,92.1
						 M121.3,101.2c-3.5,0-6.3-2.5-6.3-5.7c0-3.2,2.8-5.7,6.3-5.7c3.5,0,6.3,2.5,6.3,5.7C127.6,98.7,124.8,101.2,121.3,101.2'/>
					<path class='st102' d='M143.8,101.2c-1.3,0-2.3-1-2.3-2.3l0-4.7c0-1.1-1-2-2.2-2c-1.2,0-2.2,0.9-2.2,2l0,7c-1.3,0-2.3-1-2.3-2.3
						l0-4.8c0-1.1-1-2-2.2-2c-1.2,0-2.2,0.9-2.2,2l0,4.7c0,1.3-1,2.3-2.3,2.3l0-7c0-2.4,2-4.3,4.5-4.3c1.3,0,2.5,0.5,3.3,1.4
						c0.8-0.9,2-1.4,3.3-1.4c2.5,0,4.5,1.9,4.5,4.3L143.8,101.2z'/>
					<path class='st102' d='M151.2,101.1c-0.6,0-1.2,0-1.7-0.2c-1.2-0.3-1.9-1.6-1.6-2.8c0-0.1,0.1-0.3,0.1-0.4l0,0
						c0.6,0.7,1.7,1.1,3.1,1.1c2.1,0,3.7-1.5,3.7-3.3c0-1.9-1.6-3.5-3.7-3.5c-2,0-4,1.1-4,3.5l0,7.4c0,1.2-1,2.2-2.3,2.2l0-9.6
						c0-3.3,2.6-5.8,6.2-5.8c1.6,0,3.1,0.6,4.2,1.6c1.1,1.1,1.8,2.5,1.8,4.1C157.2,98.7,154.6,101.1,151.2,101.1'/>
					<path class='st102' d='M167.5,87.6l-4.9,0l0,13.5h-0.1c-1.2,0-2.2-1-2.2-2.3l0-11.2l-4.9,0c-1.2,0-2.2-1-2.2-2.3l16.6,0
						C169.7,86.6,168.7,87.6,167.5,87.6'/>
					<path class='st102' d='M182,87.7l-3.2,7.1l6.1,0l-3.3-7.2L182,87.7z M187,99.7l-1.2-2.6l-8.1,0l-1.2,2.7
						c-0.6,1.1-2.1,1.4-3.2,1.4l6.6-14.5c0.4-0.8,1-1.3,1.8-1.3c0.8,0,1.5,0.5,1.8,1.3l6.5,14.3C188.9,101.1,187.5,100.8,187,99.7'
						/>
					<path class='st102' d='M112.4,89.6c-1.2-1.3-3-2.2-5-2.2c-3.5,0-6.4,2.6-6.4,5.7c0,3.2,2.9,5.8,6.4,5.8c1.7,0,3.3-0.6,4.5-1.7
						c0.8-0.7,2.1-0.6,2.9,0c-0.6,1-1.5,1.8-2.5,2.4c-1.5,0.9-3.1,1.4-4.9,1.4c-4.8,0-8.7-3.6-8.7-8c0-4.4,3.9-8,8.7-8
						c3.4,0,6.5,1.9,7.9,4.7C114.4,90.5,113.2,90.4,112.4,89.6'/>
					<path class='st102' d='M191.4,99.3c0,0-0.1,0-0.1,0c0,0,0.1,0.1,0.3,0.4l0,0c-0.1,0.1-0.2,0.1-0.3,0c-0.3-0.3-0.3-0.3-0.3-0.3
						l-0.3,0v-0.1c0-0.1,0.1-0.2,0.2-0.2h0.1c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1-0.3-0.1l-0.4,0v0.8
						c0,0.1-0.1,0.2-0.2,0.2h-0.1l0-1c0-0.1,0.1-0.2,0.2-0.2h0.5c0.5,0,0.6,0.3,0.6,0.4C191.6,99.1,191.5,99.2,191.4,99.3
						 M190.9,98.4c-0.5,0-0.9,0.4-0.9,0.8c0,0.5,0.4,0.8,0.9,0.8c0.5,0,1-0.4,1-0.8C191.9,98.7,191.5,98.4,190.9,98.4 M190.9,100.3
						c-0.7,0-1.2-0.5-1.2-1.1c0-0.6,0.5-1.1,1.2-1.1c0.7,0,1.2,0.5,1.2,1.1C192.1,99.8,191.6,100.3,190.9,100.3'/>
					<path class='st102' d='M170.5,85.4l0,13.6c0,1.2,1,2.2,2.3,2.2l0-13.6C172.7,86.4,171.7,85.4,170.5,85.4'/>
				</g>
			</g>
		</g>
	</g>
	<path class='st101' d='M210,209.3c0,0-0.1,0-0.1,0c0,0,0.1,0.1,0.3,0.4l0,0c-0.1,0.1-0.2,0.1-0.3,0c-0.3-0.3-0.3-0.3-0.3-0.3h-0.3
		v-0.1c0-0.1,0.1-0.2,0.2-0.2h0.1c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1-0.3-0.1h-0.4v0.8c0,0.1-0.1,0.2-0.2,0.2h-0.1v-1
		c0-0.1,0.1-0.2,0.2-0.2h0.5c0.5,0,0.6,0.3,0.6,0.4C210.2,209.1,210.1,209.2,210,209.3 M209.5,208.3c-0.5,0-0.9,0.4-0.9,0.8
		c0,0.5,0.4,0.8,0.9,0.8c0.5,0,1-0.4,1-0.8C210.5,208.7,210.1,208.3,209.5,208.3 M209.5,210.2c-0.7,0-1.2-0.5-1.2-1.1
		c0-0.6,0.5-1.1,1.2-1.1c0.7,0,1.2,0.5,1.2,1.1C210.7,209.7,210.2,210.2,209.5,210.2'/>
</g>
</svg>";
	private $a_plus_logo = "<svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 width='100'  viewBox='0 0 288 288' style='display:inline;' xml:space='preserve'>
<style type='text/css'>
	.st0{fill:#FFFFFF;}
	.st1{fill:#E2231A;}
	.st2{fill:#6A747C;}

	
</style>
<g >
	<g>
		<g>
			<g>
				<g>
					<g>
						<path class='st0' d='M145.2,47.7c-52.6,0-95.4,42.8-95.4,95.4c0,26.5,10.6,51.1,29.8,69.3l1,1l1.1-1c2.8-2.6,5.7-4.9,8.7-7.1
							c14.6,12.9,33.8,20.8,54.8,20.8c21,0,40.2-7.9,54.8-20.8c3,2.2,5.9,4.5,8.7,7.1l1.1,1l1-1c19.3-18.2,29.9-42.9,29.9-69.3
							C240.6,90.5,197.8,47.7,145.2,47.7z'/>
						<g>
							<path class='st1' d='M121.3,89.8c-2.2,0-4,1.5-4,3.4c0,1.9,1.8,3.4,4,3.4c2.2,0,4-1.5,4-3.4
								C125.3,91.3,123.5,89.8,121.3,89.8 M121.3,98.8c-3.5,0-6.3-2.5-6.3-5.7c0-3.2,2.8-5.7,6.3-5.7c3.5,0,6.3,2.5,6.3,5.7
								C127.6,96.4,124.8,98.8,121.3,98.8'/>
							<path class='st1' d='M143.8,98.8c-1.3,0-2.3-1-2.3-2.3l0-4.7c0-1.1-1-2-2.2-2c-1.2,0-2.2,0.9-2.2,2l0,7c-1.3,0-2.3-1-2.3-2.3
								l0-4.8c0-1.1-1-2-2.2-2c-1.2,0-2.2,0.9-2.2,2l0,4.7c0,1.3-1,2.3-2.3,2.3l0-7c0-2.4,2-4.3,4.5-4.3c1.3,0,2.5,0.5,3.3,1.4
								c0.8-0.9,2-1.4,3.3-1.4c2.5,0,4.5,1.9,4.5,4.3L143.8,98.8z'/>
							<path class='st1' d='M151.2,98.8c-0.6,0-1.2,0-1.7-0.2c-1.2-0.3-1.9-1.6-1.6-2.8c0-0.1,0.1-0.3,0.1-0.4l0,0
								c0.6,0.7,1.7,1.1,3.1,1.1c2.1,0,3.7-1.5,3.7-3.3c0-1.9-1.6-3.5-3.7-3.5c-2,0-4,1.1-4,3.5l0,7.4c0,1.2-1,2.2-2.3,2.2l0-9.6
								c0-3.3,2.6-5.8,6.2-5.8c1.6,0,3.1,0.6,4.2,1.6c1.1,1.1,1.8,2.5,1.8,4.1C157.2,96.4,154.6,98.8,151.2,98.8'/>
							<path class='st1' d='M167.5,85.3l-4.9,0l0,13.5h-0.1c-1.2,0-2.2-1-2.2-2.3l0-11.2l-4.9,0c-1.2,0-2.2-1-2.2-2.3l16.6,0
								C169.7,84.3,168.7,85.3,167.5,85.3'/>
							<path class='st1' d='M182,85.4l-3.2,7.1l6.1,0l-3.3-7.2L182,85.4z M187,97.4l-1.2-2.6l-8.1,0l-1.2,2.7
								c-0.6,1.1-2.1,1.4-3.2,1.4l6.6-14.5c0.4-0.8,1-1.3,1.8-1.3c0.8,0,1.5,0.5,1.8,1.3l6.5,14.3C188.9,98.8,187.5,98.5,187,97.4'
								/>
							<path class='st1' d='M112.4,87.3c-1.2-1.3-3-2.2-5-2.2c-3.5,0-6.4,2.6-6.4,5.7c0,3.2,2.9,5.8,6.4,5.8c1.7,0,3.3-0.6,4.5-1.7
								c0.8-0.7,2.1-0.6,2.9,0c-0.6,1-1.5,1.8-2.5,2.4c-1.5,0.9-3.1,1.4-4.9,1.4c-4.8,0-8.7-3.6-8.7-8c0-4.4,3.9-8,8.7-8
								c3.4,0,6.5,1.9,7.9,4.7C114.4,88.2,113.2,88.1,112.4,87.3'/>
							<path class='st1' d='M191.4,97c0,0-0.1,0-0.1,0c0,0,0.1,0.1,0.3,0.4l0,0c-0.1,0.1-0.2,0.1-0.3,0c-0.3-0.3-0.3-0.3-0.3-0.3
								h-0.3V97c0-0.1,0.1-0.2,0.2-0.2h0.1c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1-0.3-0.1l-0.4,0v0.8
								c0,0.1-0.1,0.2-0.2,0.2h-0.1v-1c0-0.1,0.1-0.2,0.2-0.2h0.5c0.5,0,0.6,0.3,0.6,0.4C191.6,96.8,191.5,96.9,191.4,97
								 M190.9,96.1c-0.5,0-0.9,0.4-0.9,0.8c0,0.5,0.4,0.8,0.9,0.8c0.5,0,1-0.4,1-0.8C191.9,96.4,191.5,96.1,190.9,96.1 M190.9,98
								c-0.7,0-1.2-0.5-1.2-1.1c0-0.6,0.5-1.1,1.2-1.1c0.7,0,1.2,0.5,1.2,1.1C192.1,97.5,191.6,98,190.9,98'/>
							<path class='st1' d='M170.5,83.1l0,13.6c0,1.2,1,2.2,2.3,2.2l0-13.6C172.7,84.1,171.7,83.1,170.5,83.1'/>
						</g>
					</g>
				</g>
			</g>
			<g>
				<path class='st2' d='M145.2,47.7c-52.6,0-95.4,42.8-95.4,95.4c0,26.5,10.6,51.1,29.8,69.3l1,1l1.1-1c2.8-2.6,5.7-4.9,8.7-7.1
					c14.6,12.9,33.8,20.8,54.8,20.8c21,0,40.2-7.9,54.8-20.8c3,2.2,5.9,4.5,8.7,7.1l1.1,1l1-1c19.3-18.2,29.9-42.9,29.9-69.3
					C240.6,90.5,197.8,47.7,145.2,47.7z M199.7,201.5c-13.7-9.3-29.5-15-46.1-16.4v-10.8h-3.1v17.2c0,1.2,0.4,2.4,1.1,3.3l4.4,5.7
					c-0.6,0.8-0.9,1.7-0.9,2.8c0,2.6,2.1,4.7,4.7,4.7c2.6,0,4.7-2.1,4.7-4.7s-2.1-4.7-4.7-4.7c-0.4,0-0.8,0.1-1.2,0.2l-4.5-5.9
					c-0.3-0.4-0.5-0.9-0.5-1.4v-3.2c15.7,1.4,30.7,6.7,43.7,15.5c-14,12.1-32.3,19.5-52.2,19.5c-20,0-38.2-7.4-52.2-19.5
					c12.7-8.5,27.3-13.8,42.6-15.4v3.1c0,0.5-0.2,1-0.5,1.4l-4.5,5.9c-0.4-0.1-0.8-0.2-1.2-0.2c-2.6,0-4.7,2.1-4.7,4.7
					s2.1,4.7,4.7,4.7c2.6,0,4.7-2.1,4.7-4.7c0-1-0.4-2-0.9-2.8l4.4-5.7c0.7-0.9,1.1-2.1,1.1-3.3v-17.2h-3.1v10.9
					c-16.2,1.6-31.6,7.2-45,16.3c-15.6-14.6-25.3-35.3-25.3-58.3c0-44.1,35.8-79.9,79.9-79.9s79.9,35.8,79.9,79.9
					C225.1,166.1,215.3,186.9,199.7,201.5z M209.6,209.2c-2.4-2.1-4.8-4.1-7.4-6c15.9-15.1,25.9-36.5,25.9-60.1
					c0-45.8-37.2-83-83-83s-83,37.2-83,83c0,23.6,9.9,45,25.8,60.1c-2.5,1.9-5,3.8-7.4,6c-17.9-17.5-27.8-40.9-27.8-66.1
					c0-50.9,41.4-92.4,92.4-92.4s92.4,41.4,92.4,92.4C237.5,168.3,227.6,191.7,209.6,209.2z'/>
				<path class='st1' d='M243.5,109.1H37.6V159c0,4.6,3.8,8.4,8.4,8.4h205.9v-49.9C251.8,112.8,248.1,109.1,243.5,109.1z'/>
				<g>
					<path class='st0' d='M157.5,155.9h-6.6l-3.6-8.6h-16.8l-3.6,8.6h-6.4l15.6-35.7h5.8L157.5,155.9z M138.9,127.6l-6.1,14.2H145
						L138.9,127.6z'/>
					<path class='st0' d='M167.8,125.6h5.8v9.7h9.7v5.6h-9.7v9.7h-5.8v-9.7h-9.7v-5.6h9.7V125.6z'/>
				</g>
				<path class='st2' d='M146.1,209.2v-35H143v35c-1.8,0.6-3.1,2.4-3.1,4.4c0,2.6,2.1,4.7,4.7,4.7s4.7-2.1,4.7-4.7
					C149.2,211.5,147.9,209.8,146.1,209.2z'/>
			</g>
		</g>
	</g>
	<path class='st2' d='M210,206.8c0,0-0.1,0-0.1,0c0,0,0.1,0.1,0.3,0.4l0,0c-0.1,0.1-0.2,0.1-0.3,0c-0.3-0.3-0.3-0.3-0.3-0.3h-0.3
		v-0.1c0-0.1,0.1-0.2,0.2-0.2h0.1c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1-0.3-0.1h-0.4v0.8c0,0.1-0.1,0.2-0.2,0.2h-0.1l0-1
		c0-0.1,0.1-0.2,0.2-0.2h0.5c0.5,0,0.6,0.3,0.6,0.4C210.2,206.7,210.1,206.8,210,206.8 M209.6,205.9c-0.5,0-0.9,0.4-0.9,0.8
		c0,0.5,0.4,0.8,0.9,0.8c0.5,0,1-0.4,1-0.8C210.5,206.3,210.1,205.9,209.6,205.9 M209.6,207.8c-0.7,0-1.2-0.5-1.2-1.1
		c0-0.6,0.5-1.1,1.2-1.1c0.7,0,1.2,0.5,1.2,1.1C210.8,207.3,210.2,207.8,209.6,207.8'/>
</g>
</svg>";
	
	public function __construct(){

		$this->s = array("<script src='jquery/jquery-1.10.1.js'></script>" , "<script type='text/javascript' src='javascript/date.js'></script>" ,"<script type='text/javascript' src='javascript/ajax.js'></script>", "<script type='text/javascript' src='javascript/resume.js'></script>");		
		$this->l = array("<link type='text/css' rel='stylesheet' href='css/index.css'>", "<link type='text/css' rel='stylesheet' href='css/svganimations.css'>", "<link type='text/css' rel='stylesheet' href='css/resume.css'>");
		$this->m = array("<meta charset='utf-8'>","<meta name='description' content='Benny Dorlisme Portfolio Website'>","<meta name='keywords' content='Benny Dorlisme'>","<meta name='keywords' content='Dorlisme'","<meta name='keywords' content='computer programmer'");
		$this->bubble_letters = new BubbleLetters();
		$this->setPageBodyHeader();
		$this->setPageBodyBody();
		parent::__construct($this->s,$this->m,$this->l , ($this->page_body_header . $this->page_body_body));

	}
	public function setPageBodyBody(){
		$this->page_body_body = "<div id='page_content_body'>
	
	<svg id='left_arrow' onclick='Resume.toggleSectionVisibility(0)' style='width:100px; vertical-align:top; margin-top:10%;'>
		
		    <path  style='fill:red;stroke:#000000;' d='m0 50 L100 0 L100 100z'/>
	    </svg>
		<div id='technical_skills_section' class='resume_section' data-active_section='on'>
			
		{$this->bubble_letters->makeWord("Technical Skills", 'technicalskills',"0 0 1150 190" , 110, null)}
				<div id='technical_skills_menu'>
					<div id='hardware_technical_skills_list' class='menu'>
						<a href='#' onclick='Resume.TechnicalSkillsSection.toggleMenuVisibility(\"#hardware_menu\")'>{$this->bubble_letters->makeWord("Hardware",'hardware', "0 0 1000 1" , 80, 200)}</a>
						<p id='hardware_menu' >
						 Troubleshoot and Install for PCs and Macs
							
						Motherboards, CPUs,Ram,Hard Drives,Optical Drives,Video Cards,PCI/PCIe Cards,Power Supply Units,External Peripherals(keyboard, mouse, video, etc...) 
						</p>
								
						
					</div>
					<div id='software_technical_skills_list' class='menu'>
						<a href='#' >{$this->bubble_letters->makeWord("Software", 'software',"0 0 1000 1" , 100, 200)}</a>
						<p id='software_menu' >
						   HTML, CSS, Javascript, MYSQL, C/C++, BASH unix scripting, Java, Windows Batch and Powershell scripting, Active Directory Domain Services, Windows Server, WAMP , VMWare, Hyper-V, etc...
						</p>
					</div>
					
				</div>
			
		</div>
		<div id='education_section' class='resume_section' data-active_section='off'>
			{$this->bubble_letters->makeWord("Education", 'education',"0 0 1150 200" , 110, null)}
			<div id='education_list'>
					<div id='college_education_list' class='menu'>
						<a href='#'>{$this->bubble_letters->makeWord("College", 'college', "0 0 1000 1" , 80, 200)}</a>
						<p id='college_menu' class='menu'>
						<a href='www.bmcc.cuny.edu'> Borough of Manhattan Community College (BMCC)</a>
						</p>
						
						
					</div>
					<div id='secondary_education_list' class='menu'>
						<a href='#' >{$this->bubble_letters->makeWord("Secondary", 'secondary',"0 0 1000 1" , 80, 200)}</a>
						<p id='secondary_education_menu'class='menu' >
								<a href='https://perscholas.org/' target='_blank'>Per Scholas Institute for Technology</a>
								<br/>
								<a href='https://yearup.org/' target='_blank'>Year Up</a>
								
								
						</p>
					</div>
					<div id='highschool_education_list' class='menu'  >
						<a href='#' >{$this->bubble_letters->makeWord("HighSchool", 'highschool',"0 0 1000 1" , 80, 200)}</a>
						<p id='highschool_education_menu' class='menu'>
								<a href=''>South Brooklyn Community High School</a>
							
						</p>
					</div>
				</div>
		</div>
		<div id='work_section' class='resume_section' data-active_section='off'>
			{$this->bubble_letters->makeWord("Work Experience", "workexperience" , "0 0 1150 210", 110 , null)}
			<div id='work_experience_list'>
			<div id='gameglory_menu' class='menu'>
			
						<a href='#'>{$this->bubble_letters->makeWord("gameglory",'gameglory', "0 0 1000 1" , 80, 200)}</a>
						<div class='job_title_container'>
			<span class='job_title'>
			     Web Developer
			</span>
			<span class='workdate'> 
							1/2017 - present
						</span>
			</div>
						
						<p id='gameglory_menu' >
						 <ul>
						 	<li>
						 		Daily tech consultaion with the president of the company
							</li>
							<li>
						 		Bulit web site interface, and  backend 
							</li>
							
						 </ul>
						</p>
						
						
					</div>
					<div id='apex_menu' class='menu'>
						<a href='#'>{$this->bubble_letters->makeWord("apex systems",'apexsystems', "0 0 1000 1" , 80, 200)}</a>
					<div class='job_title_container'>
			<span class='job_title'>
			     Service Desk Analyst@(Viacom)
			</span>
			<span class='workdate'> 
							10/2017 - 11/2017
			</span>
			</div>
						
							<p id='apex_menu' >
						 <ul>
						 	<li>
						 		 Averaged 60 ‘taken’ and ‘resolved’ calls per day   
							</li>
							<li>
							Modified AD user accounts across 10 different domains
						</li>
						<li>
						Resolved over 500 service desk tickets
						</li>
						 </ul>
						</p>
						
						
					</div>
					<div id='garyline_menu'class='menu' >
						<a href='#' >{$this->bubble_letters->makeWord("GaryLine",'garyline', "0 0 1000 1" , 80, 200)}</a>
						<div class='job_title_container'>
			<span class='job_title'>
			     Help Desk Technician / Computer Programmer
			</span>
			<span class='workdate'> 
							5/2016 - 7/2016
			</span>
			</div>
						<p id='garyline_menu' >
								<ul>
									<li>
										Automated creating new users with Powershell and Selenium scripts 
									</li>
									<li>
									Created programs with Powershell to streamline business processes 
									</li>
									<li>
									Monitored print servers , and fixed printer issues when detected
									</li>
									<li>
									Maintained PBX phone system, and discovered new ways to use it
									</li>
									<li>
									Created , and maintained AD users and Exchange emails mailboxes 
									</li>
									<li>
									Created and , Closed over 150 helpdesk tickets 
									</li>
									<li>
									Created User Profiles for the IBM AS/400 via Windows Access Client
									</li>

								</ul>
								
						</p>
					</div>
					<div id='instacart_menu' class='menu'>
						<a href='#' >{$this->bubble_letters->makeWord("instacart", 'instacart',"0 0 1000 1" , 80, 200)}</a>
						<div class='job_title_container'>
			<span class='job_title'>
			     Shopper
			</span>
			<span class='workdate'> 
							11/2015 - 3/2016
			</span>
			</div>
						<p id='instacart_menu' >
								<ul>
									<li>
										Shopped for customers grocery items in WholeFoods market   
									</li>
									<li>
									 
									</li>
								</ul>
							
						</p>
					</div>
					
					<div id='corporatecomputers_menu' class='menu' >
						<a href='#' >{$this->bubble_letters->makeWord("corporate computers", 'corporatecomputers',"0 0 1000 1" , 80, 200)}</a>
						<p id='corporatecomputers_menu' >
								<ul>
									<li>
										Provided over 100 PC set ups, repairing and installing hardware parts for Desktops, Laptops and HP Printers.
									</li>
									<li>
								   	Troubleshot multiple HP Printers: Replaced parts, toners, fuser, belts and formatters.
 									proprietary software upgrades in different business settings: Corporate, Medical & Private practices.

									</li>
								</ul>
							
						</p>
					</div>
					<div id='wnet_menu' class='menu'>
						<a href='#' >{$this->bubble_letters->makeWord("wnet", 'wnet',"0 0 1000 1" , 80, 200)}</a>
						<div class='job_title_container'>
			<span class='job_title'>
			     Help Desk Technician
			</span>
			<span class='workdate'> 
							10/2012 - 2/2013
			</span>
			</div>
						<p id='wnet_menu' >
								<ul>
									<li>
										Repaired & Installed hardware parts for Desktops 
									</li>
									<li>
										Performed over 100 PC set ups for new and moving employees 
									</li>
									<li>
									Assisted Managing User Profiles, Migrating User Profile Data
									</li>
									<li>
									 Averaged closing about 5 – 10 help desk tickets a day on propietry ticket system
									</li>
									<li>
									Analyzed and fixed various hardware and software errors using programs such as Recovery Console
									</li>
									<li>
									Assisted Users over the phone and in person with software and hardware issues 
									</li>
									<li>
								Updated Room Reservation List every morning for all three floors of the company
									</li>
								</ul>
							
						</p>
					</div>
					<div id='staples_menu' class='menu'>
						<a href='#' >{$this->bubble_letters->makeWord("staples", 'staples',"0 0 1000 1" , 80, 200)}</a>
						<div class='job_title_container'>
			<span class='job_title'>
			     Sales Associate / Easy Tech
			</span>
			<span class='workdate'> 
							5/2016 - 7/2016
			</span>
			</div>
							<p id='staples_menu' >
								<ul>
									<li>
										Backed up customer data
									</li>
									<li>
										Sold computer hardware products to customers
									</li>
									
								</ul>
							
						</p>
					</div>
					<div id='redemtech_menu' class='menu'>
					<div class='job_title_container'>
			<span class='job_title'>
			    Production Technician 
			</span>
			<span class='workdate'> 
							10/2010 - 1/2011
			</span>
			</div>
						<a href='#' >{$this->bubble_letters->makeWord("redemtech", 'redemtech',"0 0 1000 1" , 80, 200)}</a>
						<p id='redemtech_menu' >
								<ul>
									<li>
										Refurbished over 1,000 Computers (Desktops, Laptops and Servers)
									</li>
									<li>
										Worked with proprietary software to wipe and test HDDs
									</li>
									<li>
										Recycled obsolete and unwanted computers and peripheral parts
									</li>
									<li>
										Met company’s daily quota for functional PC, Laptops and Printers for resale or donation
									</li>
								
								</ul>
							
						</p>
					</div>
					<div id='hookproductions_menu' class='menu' >
						<a href='#' >{$this->bubble_letters->makeWord("hook productions", 'hookproductions',"0 0 1000 1" , 80, 200)}</a>
						<div class='job_title_container'>
			<span class='job_title'>
			    Intern
			</span>
			<span class='workdate'> 
							8/2008 - 1/2010
			</span>
			</div>
						<p id='hookproductions_menu' >
								<ul>
									<li>
										Created 3-D models, such as buildings and animation, using Blender, an open source program
									</li>
									<li>
										Received special certificate of recognition for exemplary work in the creation of 3-D models    
									</li>
									<li>
										Produced music using Reason software
									</li>
								</ul>
							
						</p>
					</div>
				
				</div>
			
		</div>
			<svg id='right_arrow' onclick='Resume.toggleSectionVisibility(1)'  style='width:100px; vertical-align:top; margin-top:10%;'>
		
		    <path style='fill:red;stroke:#000000;' d='m0 0 L100 50 L0 100z'/>
	    </svg>
		
		
	
	</div>
	
	";
	}
	public function setPageBodyHeader(){
		$this->page_body_header = "<section id='page_content'>
		<header id='page_content_header'>
		<div id='page_content_header_container'>
		<div>
			
			
			{$this->bubble_letters->makeWord("benny dorlisme", 'bennydorlisme' ,"0 0 1150 100" , null, 325)}
			<div id='resume_contact_info'>
			<a href='Dorlisme_Benny_Resume_IT.docx.docx'> Download Resume 1</a>
			
				<a href='Dorlisme_Benny_Resume_QA_Dev.docx'> Download Resume 2</a>
				<br/>	
				<span>251 Osborn St Brooklyn, NY 11212</span>
			
				<span>BennyDorlisme@gmail.com</span>
				
				<div  > <a href='https://www.certmetrics.com/comptia/public/transcript.aspx?transcript=4T7DVJY12MB15M8L' >{$this->a_plus_logo}</a> <a href='https://www.certmetrics.com/comptia/public/transcript.aspx?transcript=4T7DVJY12MB15M8L'> {$this->net_plus_logo}</a>
				</div>
				
			</div>
		</div>
		
	</div>
	</header>";
	}
	public function setPageBodyFooter(){
		
	}
}

$page = new ResumePage();
$page->printPage();

?>
