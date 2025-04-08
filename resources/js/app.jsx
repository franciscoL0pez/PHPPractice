// resources/js/App.jsx
import React, { useState } from 'react';
import ReactDOM from 'react-dom/client';
import Login from './screens/Login';

function App() {
    const [authenticated, setAuthenticated] = useState(false);

    const handleLoginSuccess = () => {
        setAuthenticated(true);
    };

    return (
        <>
            {authenticated ? (
                <div className="p-8">
                    <h1 className="text-2xl font-bold mb-4">Bienvenido al ABM de Mensajes</h1>
                    {/* Acá iría tu ABM que mostraste antes */}
                </div>
            ) : (
                <Login onLoginSuccess={handleLoginSuccess} />
            )}
        </>
    );
}

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);


