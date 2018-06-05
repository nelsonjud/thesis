<!-- sidebar nav -->
<nav id="sidebar-nav">
	<p class="logo">
		<img src="/images/logo_STI.png" />
	</p>
    <ul class="nav nav-pills nav-stacked right-nav">
    	@if (Route::currentRouteName() == "")
    		<li class="active"><a href="/"><span class="glyphicon glyphicon-th-list"></span>News Feed</a></li>
    	@else
        	<li><a href="#"><span class="glyphicon glyphicon-th-list"></span>News Feed</a></li>
        @endif
        <li><a href="#"><span class="glyphicon glyphicon-folder-open"></span>Service Record</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-credit-card"></span>Payroll</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-blackboard"></span>Benefits</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span>Discipline</a></li>
    </ul>
</nav>