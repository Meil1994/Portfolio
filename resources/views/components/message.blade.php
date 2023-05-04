@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"  class='shadow-2xl shadow-black text-center sm3:rounded-lg fixed top-0 w-100 sm3:w-50 sm3:ml-25 z-40 mt-10 dark:text-slate-700 p-10 bg-teal-500'>
        <p>{{session('message')}}</p>
    </div>
@endif

