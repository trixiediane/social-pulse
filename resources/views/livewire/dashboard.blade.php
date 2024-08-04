<div x-data="userList">
    @foreach ($users as $user)
        <div>
            {{ $user->username }}
            <button @click="setUserId({{ $user->id }})">
                Chat
            </button>
            <div x-show="selectedUserId === {{ $user->id }}" class="mt-2">
                <input type="text" x-model="message" placeholder="Type your message here..." class="border p-2">
                <button @click="sendMessage" class="ml-2 bg-blue-500 text-white p-2">Send</button>
            </div>
        </div>
    @endforeach
</div>
<script type="module">
    let userId = {{ auth()->user()->id }}
    console.log(userId)

    let channel = `user.${userId}`;
    let chatChannel = Echo.channel(channel);
    chatChannel.listen('.message-sent', function(event) {
        console.log('Event received:', event);
        console.log('Message:', event.message);
    });

    document.addEventListener('alpine:init', () => {
        Alpine.data('userList', () => ({
            selectedUserId: null,
            message: '',
            setUserId(id) {
                this.selectedUserId = id;
                this.message = '';
            },
            sendMessage() {
                if (this.message.trim() === '') {
                    alert('Message cannot be empty');
                    return;
                }

                console.log('Sending message to User ID:', this.selectedUserId);


                // Call Livewire method to send the message
                @this.sendMessage(this.selectedUserId, this.message);

                // Clear the message input
                this.message = '';
            }
        }));
    });
</script>
