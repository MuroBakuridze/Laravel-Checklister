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
                    <form action="{{ route('admin.checklist_groups.update', $checklistGroup) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Checklist Group') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">{{__('Name')}}</label>
                                        <input value="{{ $checklistGroup->name }}" class="form-control" id="name" name="name" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">{{__('Save')}}</button>
                        </div>
                    </form>
                </div>
                <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mt-5">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('{{__('Are you sure you want to delete: ')}} {{ $checklistGroup->name }}')";>{{__('Delete this checklist group')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
