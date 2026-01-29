<!-- Overlay -->
<div
    x-show="openCreate"
    x-transition.opacity
    class="fixed inset-0 bg-black/40 z-40"
    @click="openCreate = false"
></div>

<!-- Modal -->
<div
    x-show="openCreate"
    x-transition
    class="fixed inset-0 z-50 flex items-center justify-center"
>
    <div
        @click.stop
        class="bg-white w-full max-w-lg rounded-xl shadow p-6"
    >
        <h2 class="text-lg font-semibold mb-4">
            Create new task
        </h2>

        <form
            method="POST"
            action="{{ route('tasks.store') }}"
            class="space-y-4"
        >
            @csrf

            <div>
                <label class="text-sm text-gray-600">Title</label>
                <input
                    type="text"
                    name="title"
                    class="w-full mt-1 px-4 py-2 border rounded-lg"
                    required
                >
            </div>

            <div>
                <label class="text-sm text-gray-600">Description</label>
                <textarea
                    name="description"
                    class="w-full mt-1 px-4 py-2 border rounded-lg"
                ></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-sm text-gray-600">Priority</label>
                    <select
                        name="priority"
                        class="w-full mt-1 px-4 py-2 border rounded-lg"
                    >
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm text-gray-600">Deadline</label>
                    <input
                        type="date"
                        name="deadline"
                        class="w-full mt-1 px-4 py-2 border rounded-lg"
                    >
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button
                    type="button"
                    @click="openCreate = false"
                    class="px-4 py-2 rounded-lg border"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="px-4 py-2 bg-slate-800 text-white rounded-lg"
                >
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
