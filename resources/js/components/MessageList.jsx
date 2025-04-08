export default function MessageList({ messages }) {
    return (
        <ul className="space-y-2">
            {messages.map((msg) => (
                <li key={msg.id} className="p-2 border rounded">{msg.text}</li>
            ))}
        </ul>
    );
}
