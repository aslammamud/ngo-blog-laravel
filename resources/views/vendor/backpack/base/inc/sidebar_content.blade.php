{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon la la-question"></i> Articles</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-question"></i> Categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('job') }}"><i class="nav-icon la la-question"></i> Jobs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-question"></i> Tags</a></li>


@if(backpack_user()->hasRole('admin'))

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Unapproved Posts</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('unapproved') }}"><i class="nav-icon la la-question"></i> Articles</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('job') }}"><i class="nav-icon la la-question"></i> Jobs</a></li>
    </ul>
</li>


<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
@endif