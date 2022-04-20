


<x-app-layout>
    <x-slot name="header">
        <h3 >
            {{ __('Dashboard') }}
        </h3>
    </x-slot>

    <div >
        <div>
            <div >

                <table class="tablepost">
<tbody>
<tr>
<td> <h4 >Les actions possibles</h4></td></tr>
<tr>
<td>   <a href="{{ route('users') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des utilisateurs
                    </a> </td></tr>
<tr>
<td>  <a href="{{ route('posts.index') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des posts
                    </a></td></tr>
<tr>
<td>   <a href="{{ route('comments.index') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des commentaires
                    </a></td></tr>
</tbody>
</tr>
</table>
               
                <div class="p-6  border-b border-gray-200 text-center">
                  
                   
                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
