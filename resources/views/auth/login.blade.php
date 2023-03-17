<x-main-layout>
	<x-slot name="title">Login</x-slot>
	<x-slot name="description">This is the login page</x-slot>
	<x-slot name="robots">index, follow</x-slot>
	<x-slot name="center">
		<div class="main">
<div id="notification"></div>

<div class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<div class="breadcrumb__wrapper">
<div class="breadcrumb__row">
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a class="breadcrumb__link" itemprop="item" href="https://it-rating.com/">
<span itemprop="name"><em class="fa fa-home"></em></span>
</a>
<meta itemprop="position" content="1">
</span>
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a class="breadcrumb__link" itemprop="item" href="https://it-rating.com/my-account/">
<span itemprop="name">Account</span>
</a>
<meta itemprop="position" content="1">
</span>
<span class="breadcrumb__link breadcrumb__link_current">Login</span>
</div>
</div>
</div>

<div class="main__page-wrap">
<div class="columns">
<div class="content">
<div class="authorization authorization_login">
<h1 class="authorization__heading">Authorization</h1>
<div class="authorization__row">
<div class="authorization__left">
<div class="authorization__btns-wrap authorization__btns-wrap_center">
<span class="authorization__link authorization__link_active">Login to the cabinet</span>
<a class="authorization__link" href="#">Registration</a>
</div>
<form class="formBlcok authorization__formBlcok" action="/login" method="post" enctype="multipart/form-data">
@csrf
<div class="field formBlcok__field formBlcok__field_col12">
<div class="field__name">E-Mail:</div>
<div class="field__inp">
<input type="text" name="email" placeholder="" value="testemail@mail.com">
</div>
</div>
<div class="field formBlcok__field formBlcok__field_col12">
<div class="field__name">Password</div>
<div class="field__inp">
<input type="password" name="password" placeholder="" value="password">
</div>
</div>
<div class="field formBlcok__field formBlcok__field_col12">
<a class="field__forgotten" href="https://it-rating.com/index.php?route=account/forgotten">Forgot your password?</a>
</div>
<div class="field formBlcok__field formBlcok__field_col12">
<input class="btn btn_size_l btn_theme_fill btn_color_c1 field__enter" type="submit" value="Login">
</div>
<div id='google_auth_wrap' style='width:100%;display:flex;justify-content:space-around;margin-top:35px'><a href='/google'><button id='google_auth' style='width:362px;height:48px;background-image:url(/images/google_icon.png);background-repeat: no-repeat;background-size: 10%;background-position: left 10px top 4px;cursor:pointer;margin-bottom:100px'>LOGIN VIA GOOGLE</button></a></div>
<div id='gitlab_auth_wrap'><a href='/gitlab'><button id='gitlab_auth' class='input_button'>Войти через GITLAB</button></a></div>
</form>
</div>
<div class="authorization__right">
<div class="authorization__info">

<div class="authorization__headingLight">By creating an account <br> You will be able to take part in:</div><ul class="authorization__list"><li>IT companies rating;</li><li>tender competition;</li><li>attracting clients; </li></ul><div class="authorization__txt">Answers to basic questions in the section <a href="/faq">FAQ</a></div> </div>
</div>
</div>
</div>

</div>

</div>
</div>



</div>
	</x-slot>
</x-main-layout>