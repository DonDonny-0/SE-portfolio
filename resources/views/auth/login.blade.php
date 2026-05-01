<x-layout>
  <div>
    <form action="/login" method="post">
      <label for="username">Username</label>
      <input id="username" name="username" type="text">

      <label for="password">Password</label>
      <input id="password" name="password" type="text">

      <button type="submit">Login</button>
    </form>
  </div>
</x-layout>