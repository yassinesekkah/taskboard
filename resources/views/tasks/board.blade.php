<x-app-layout>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- TODO -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">
            TODO
        </h3>

        <div class="space-y-4">
            <x-task-card
                title="Design landing page"
                desc="Create hero section and layout"
                date="12 Sep"
                color="blue"
            />
        </div>
    </div>

    <!-- DOING -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">
            DOING
        </h3>

        <div class="space-y-4">
            <x-task-card
                title="Laravel Auth"
                desc="Breeze setup & customization"
                color="yellow"
            />
        </div>
    </div>

    <!-- DONE -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">
            DONE
        </h3>

        <div class="space-y-4">
            <x-task-card
                title="Database schema"
                color="green"
            />
        </div>
    </div>

</div>

</x-app-layout>
