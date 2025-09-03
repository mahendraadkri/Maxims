@extends('frontend.master')

@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Contact Messages</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="about-us" id="messages">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($messages as $msg)
                  <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->phone }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->subject }}</td>
                    <td style="white-space:pre-wrap; max-width:400px;">{{ $msg->message }}</td>
                    <td>{{ $msg->created_at->format('Y-m-d H:i') }}</td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6">No messages yet.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="mt-3">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
          </div>
          <div>
            {{ $messages->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


