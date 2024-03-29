<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
      </svg>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        @if(auth()->user()->is_admin)
            <li class="nav-title">
                {{__('Manage Checklists')}}
            </li>
            
            @foreach (\App\Models\ChecklistGroup::with('checklists')->get() as $group)
                <li class="nav-group">
                    <a class="nav-link " href="{{ route('admin.checklist_groups.edit', $group->id) }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-folder-open') }}">
                        </use>
                        </svg> 
                            {{ $group->name }}
                    </a>
                    <ul class="nav-group-items">
                        @foreach ($group->checklists as $checklist)
                            <li class="nav-group">
                                <a class="nav-link " href="{{ route('admin.checklist_groups.checklists.edit', [$group, $checklist]) }}" style="padding: .5rem .5rem .5rem 86px">
                                    <svg class="nav-icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}">
                                        </use>
                                    </svg> 
                                        {{ $checklist->name }}
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-group">
                            <a class="nav-link" href="{{ route('admin.checklist_groups.checklists.create', $group) }}">
                                <svg class="nav-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-note-add') }}">
                                    </use>
                                </svg> 
                                {{__('New checklist')}}
                            </a> 
                        </li>
                    </ul>
                </li>
            @endforeach
            <li class="nav-group">
                <a class="nav-link" href="{{ route('admin.checklist_groups.create', $group) }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-library-add') }}">
                        </use>
                    </svg> 
                    {{__('New checklist group')}}
                </a> 
            </li>

            <li class="nav-title">
                {{__('Pages')}}
            </li>
            @foreach (\App\Models\Page::all() as $page)
                <li class="nav-group">
                    <a class="nav-link" href="{{ route('admin.pages.edit', $page) }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}">
                        </use>
                        </svg> 
                            {{ $page->title }}
                    </a>
                </li>
            @endforeach
            <li class="nav-title">
                {{__('Manage Data')}}
            </li>
                <li class="nav-group">
                    <a class="nav-link" href="{{ route('admin.users.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}">
                        </use>
                        </svg> 
                            {{ __('Users') }}
                    </a>
                </li>
            @else 
                @foreach (\App\Models\ChecklistGroup::with(['checklists' => function($query) { $query->whereNull('user_id'); }])->get() as $group)
                    <li class="nav-title">
                        {{ $group->name }}
                    </li>
                    <ul class="nav-group-items">
                        @foreach ($group->checklists as $checklist)
                            <li class="nav-group">
                                <a class="nav-link " href="{{ route('user.checklists.show', [$checklist]) }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}">
                                        </use>
                                    </svg> 
                                        {{ $checklist->name }}
                                </a>
                            </li>
                        @endforeach
                @endforeach
        @endif
        {{-- <li class="nav-title">
            {{__('Other')}}
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                    </use>
                </svg> 
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li> --}}
    </ul>
</div>