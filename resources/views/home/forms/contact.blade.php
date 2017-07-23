<form class="form-horizontal" method="POST" action="{{ route('contact-submit') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name" class="sr-only">Name</label>
    <input name="name"
           type="text"
           class="form-control text-center"
           id="name"
           placeholder="Full Name"
           required
      >
  </div>
  <div class="form-group">
    <label for="email" class="sr-only">Email</label>
    <input name="email"
           type="email"
           class="form-control text-center"
           id="email"
           placeholder="Email"
           required
      >
  </div>
  <div class="form-group">
    <label for="telephone" class="sr-only">Phone</label>
    <input name="telephone"
           type="tel"
           class="form-control text-center"
           id="telephone"
           placeholder="Phone (optional)"
      >
  </div>
  <div class="form-group">
    <label for="message" class="sr-only">Message</label>
    <textarea name="message"
              class="form-control text-center"
              rows="5"
              id="message"
              placeholder="What do you have to say?"
              required
      ></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
