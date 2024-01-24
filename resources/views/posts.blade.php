@extends('layouts.main')

@section('container')
   <h1>Ini Halaman Post</h1>

   @foreach ($posts as $post)
   <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
   </h2>
   <p>{{ $post->excerpt }}</p>
   @endforeach
@endsection

{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit tenetur officia saepe impedit iste laborum nihil quaerat voluptatum itaque pariatur ad tempore est omnis veritatis inventore repellat, explicabo eum quas!</p><p> Enim itaque cum ab eos, voluptatem neque laborum doloremque rerum obcaecati quod veritatis ratione autem labore, reiciendis odio alias fugit velit expedita facilis! Quia quibusdam libero consectetur quasi nostrum asperiores architecto quaerat aut, dignissimos quas, id sequi sunt officiis culpa nemo sit eius sint inventore!</p><p> Eum aperiam veniam natus voluptatibus error. Voluptatum a assumenda numquam perspiciatis sed reiciendis minus, totam beatae, voluptas dolorum consectetur, iure veniam aliquid facilis dolores animi esse. Labore omnis error architecto quasi laborum! Itaque magni necessitatibus fugit inventore recusandae accusantium ipsum labore libero optio excepturi?</p>

Post::create([
   'title' => 'Post Lima',
   'category_id' => 3,
   'slug' => 'post-lima',
   'excerpt' => 'Lorem ipsum dolor sit amet',
   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit tenetur officia saepe impedit iste laborum nihil quaerat voluptatum itaque pariatur ad tempore est omnis veritatis inventore repellat, explicabo eum quas!</p><p> Enim itaque cum ab eos, voluptatem neque laborum doloremque rerum obcaecati quod veritatis ratione autem labore, reiciendis odio alias fugit velit expedita facilis! Quia quibusdam libero consectetur quasi nostrum asperiores architecto quaerat aut, dignissimos quas, id sequi sunt officiis culpa nemo sit eius sint inventore!</p><p> Eum aperiam veniam natus voluptatibus error. Voluptatum a assumenda numquam perspiciatis sed reiciendis minus, totam beatae, voluptas dolorum consectetur, iure veniam aliquid facilis dolores animi esse. Labore omnis error architecto quasi laborum! Itaque magni necessitatibus fugit inventore recusandae accusantium ipsum labore libero optio excepturi?</p>'
]) 

Category::create([
   'name' => 'Personal',
   'slug' => 'personal'
])
--}}