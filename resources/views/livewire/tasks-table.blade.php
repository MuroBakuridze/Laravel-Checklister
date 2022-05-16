<table class="table table-hover" wire:sortable="updateTaskOrder">
    <tbody>
        @foreach ($tasks as $task)
        <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" class="">
            <td class="">{{ $task->name }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{ __('Edit') }}</a>
                <form style="display: inline-block"  action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mt-3">
                        <button class="btn btn-sm btn-danger" type="submit"
                            onclick="return confirm('{{ __('Are you sure you want to delete: ') }} {{ $task->name }}')"
                            ;>{{ __('Delete') }}</button>
                    </div>
                </form>
            </td>
            {{-- <td class="py-2">
                <button class="btn btn-outline-primary btn-sm btn-square"type="button">
                    Show
                </button>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
