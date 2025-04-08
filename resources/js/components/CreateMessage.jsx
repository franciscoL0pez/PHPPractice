export default function CreateMessage({ text, setText, handleSubmit }) {
    return (
        <form onSubmit={handleSubmit} className="mb-6">
            <input
                type="text"
                value={text}
                onChange={(e) => setText(e.target.value)}
                placeholder="Escribí un mensaje"
                className="border p-2 mr-2"
                required
            />
            <button type="submit" className="bg-blue-500 text-white p-2">Guardar</button>
        </form>
    );
}
