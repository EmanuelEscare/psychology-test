<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <br>
            <div class="border-0 container">
                <div>
                    <div id="test" data-id="{{ $id }}">
                        <script>
                            const user_data = @json($user);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Notification --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="notification" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    ¡Prueba completada!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('notification', event => {
            $("#notification").toast('show');
        })
    </script>

    {{-- <script>
        if (document.getElementById('test')) {
                const elementtest = document.getElementById('test');
      const Index = testDOM.createRoot(document.getElementById("test"));
      const idValue = elementtest.getAttribute('data-id');
    //   const User = user_data;

    Index.render(
        <test.StrictMode>
          <Test id={idValue} />
        </test.StrictMode>
      )
            }
        </script> --}}
</x-app-layout>
