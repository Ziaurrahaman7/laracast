@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="bg-white by rounded-sm border border-slate-200">
	<header class="mn mr">
		<h2 class="g_ text-slate-800">All Customers <span class="yu gk">248</span></h2> </header>
	<div x-data="handleSelect">
		<div class="lz">
			<table class="av col-12 oq">
				<thead class="gb g_ gq text-slate-500 hq ck cx border-slate-200">
					<tr>
						<th class="v_ wk xe vm co">
							<div class="g_ gh">title</div>
						</th>

						<th class="v_ wk xe vm co">
							<div class="g_ gh">edit</div>
						</th>
						<th class="v_ wk xe vm co">
							<div class="g_">delete</div>
						</th>

					</tr>
				</thead>
				<tbody class="text-sm lg lb">
                    @foreach($posts as $post)
					<tr>

                    <td class="v_ wk xe vm co">
							<div class="gh">{{$post->title}}</div>
						</td>
						<td class="v_ wk xe vm co">
							<div class="gh"><a class="btn btn-light" href="/post/admin/{{$post->id}}/edit">Edit</a></div>
						</td>
						<td class="v_ wk xe vm co">
							<form method="post" action="/post/admin/{{$post->id}}">
								@csrf
								@method('delete')
								<x-form.button>delete</x-form.button>
							</form>
							
						</td>
					</tr>
                @endforeach()
				</tbody>
			</table>
		</div>
	</div>
</div>
        </div>
    </div>
</div>
@include('post.footer')