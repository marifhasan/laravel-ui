@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="lg:text-center">
        <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">{{ __('Dashboard') }}</p>
        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-indigo-600 sm:text-4xl sm:leading-10 ">{{ __('Dashboard') }}</h3>
        <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
            {{ __('You are logged in!') }}
        </p>
    </div>

    <div class="mt-8 space-y-6 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8 lg:mt-16">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <span class="h-10 w-10 pt-0.5 bg-teal-500 flex items-center justify-center rounded-full text-lg leading-10 font-display font-bold text-white">01</span>
            </div>
            <div class="ml-4">
                <p class="text-lg leading-6 font-medium text-gray-900">Find the perfect component</p>
                <p class="mt-1 max-w-xl text-base leading-6 text-gray-500 lg:mt-2">
                    Every component is embedded live directly on the page, and you can even see what they look like at different breakpoints by dragging the slider on the right.
                </p>
            </div>
        </div>
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <span class="h-10 w-10 pt-0.5 bg-teal-500 flex items-center justify-center rounded-full text-lg leading-10 font-display font-bold text-white">02</span>
            </div>
            <div class="ml-4">
                <p class="text-lg leading-6 font-medium text-gray-900">Copy the snippet</p>
                <p class="mt-1 max-w-xl text-base leading-6 text-gray-500 lg:mt-2">
                    Click the "Code" tab to see the code for a component and grab the part that you need, or click the clipboard button to quickly copy the entire snippet in one step.
                </p>
            </div>
        </div>
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <span class="h-10 w-10 pt-0.5 bg-teal-500 flex items-center justify-center rounded-full text-lg leading-10 font-display font-bold text-white">03</span>
            </div>
            <div class="ml-4">
                <p class="text-lg leading-6 font-medium text-gray-900">Make it yours</p>
                <p class="mt-1 max-w-xl text-base leading-6 text-gray-500 lg:mt-2">
                    Every component is built entirely out of Tailwind utility classes, so you can easily dive in and adjust anything you want to better fit your use case.
                </p>
            </div>
        </div>
    </div>
    
    <div class="mt-10 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
        <table class="min-w-full w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-900">Director</div>
                    <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    Owner
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1532910404247-7ee9488d7292?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-900">Director</div>
                    <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    Owner
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1505503693641-1926193e8d57?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-900">Director</div>
                    <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        Inactive
                    </span>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    Owner
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </div>
                        <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">Bernard Lane</div>
                        <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                    <div class="text-sm leading-5 text-gray-900">Director</div>
                    <div class="text-sm leading-5 text-gray-500">Human Resources</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        Inactive
                    </span>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                    Owner
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
