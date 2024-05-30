<x-casteaching-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $video->title }}
        </h2>
    </x-slot>

    <div class="flex flex-col mt-10">

        <div class="mx-auto sm:px-6 lg:px-8 w-full max-w-7xl">

            @can('videos_manage_create')
                <div class="md:grid md:grid-cols-1 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-gray-900 font-medium text-lg leading-6">Vídeos</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Informació bàsica del video
                        </p>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <form data-qa="form_video_edit" action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden bg-white">
                            <div class="px-4 py-5 space-y-6 sm:p-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">
                                    Title
                                </label>
                                <div class="mt-1">
                                    <input required type="text" name="title" id="title" class="w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 placeholder:text-gray-500" value="{{ $video->title }}"/>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Títol curt del nostre video</p>
                            </div>
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea required name="description" id="description" cols="30" rows="10" class="w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 placeholder:text-gray-500">{{ $video->description }}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Descripció del video</p>
                            </div>
                            <div>
                                <label for="url" class="block text-sm font-medium text-gray-700">
                                    URL
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                            <span
                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-300 text-gray-500 text-sm">
                                https://
                            </span>
                                    <input required id="url" name="url" type="url"
                                           class="w-full rounded-md focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300"
                                             value="{{ $video->url }}">
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            @endcan
        </div>
    </div>
</x-casteaching-layout>
