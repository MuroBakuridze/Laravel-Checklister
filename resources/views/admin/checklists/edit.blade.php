@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header">{{ __('Edit Checklist') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">{{ __('Name') }}</label>
                                            <input value="{{ $checklist->name }}" class="form-control" id="name"
                                                name="name" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">{{ __('Save Checklist') }}</button>
                            </div>
                        </form>
                    </div>

                    <form action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-3">
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('{{ __('Are you sure you want to delete: ') }} {{ $checklist->name }}')"
                                ;>{{ __('Delete this checklist') }}</button>
                        </div>
                    </form>

                    <hr />
                    <h2 class="mt-4">{{ __('List of Tasks') }}</h2>

                    {{-- Table Content --}}
                    <div class="card mt-4">
                        <div class="px-2" style="padding:20px;border:1px solid #a0a0a0;min-height:200px">
                            <div class="position-relative table-responsive">
                                @livewire('tasks-table', ['checklist' => $checklist])
                            </div>
                        </div>
                    </div>
                    {{-- End Of Table Content --}}
                    <div class="card mt-4">
                        @if ($errors->storetask->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->storetask->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.checklists.tasks.store', [$checklist]) }}" method="POST">
                            @csrf
                            <div class="card-header">{{ __('New Task') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">{{ __('Name') }}</label>
                                            <input value="{{ old('name') }}" class="form-control" id="name" name="name"
                                                type="text">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="description">{{ __('Description') }}</label>
                                            <textarea class="form-control" id="task-textarea" name="description" rows="5">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">{{ __('Save Task') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
