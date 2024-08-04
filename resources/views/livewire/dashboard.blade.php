<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <script type="module">
        let receivedMessage = Echo.channel('channel-core');
        let channel = receivedMessage.listen('.event-message-received', function(event) {
            console.log(event);
        });
    </script>
</div>
