import { Button, Label, TextInput, Card } from 'flowbite-react';
import { useState } from 'react';
import { motion } from 'framer-motion';
import axios from 'axios';

export default function Login({ onLoginSuccess }) {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [error, setError] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError('');
        try {
            await axios.post('/login', { email, password });
            onLoginSuccess();
        } catch (err) {
            setError('Email o contraseña incorrectos');
        }
    };

    return (
        <div className="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-800 via-pink-500 to-yellow-400 p-10">
            <motion.div
                initial={{ opacity: 0, scale: 0.8 }}
                animate={{ opacity: 1, scale: 1 }}
                transition={{ duration: 1, ease: 'easeOut' }}
                className="w-full max-w-6xl"
            >
                <Card className="w-full p-20 rounded-[3rem] backdrop-blur-3xl bg-white/10 border border-white/30 shadow-2xl hover:shadow-yellow-500/60 transition-all duration-500">
                    <h2 className="text-8xl font-extrabold text-center bg-gradient-to-r from-yellow-300 via-pink-400 to-purple-600 bg-clip-text text-transparent mb-16 drop-shadow-2xl">
                        ¡Bienvenido!
                    </h2>
                    {error && (
                        <motion.div
                            initial={{ opacity: 0, y: -30 }}
                            animate={{ opacity: 1, y: 0 }}
                            className="text-red-500 bg-red-100/40 p-6 rounded-3xl text-center mb-12 font-semibold text-3xl shadow-lg"
                        >
                            {error}
                        </motion.div>
                    )}
                    <form onSubmit={handleSubmit} className="flex flex-col gap-12">
                        <div className="flex flex-col gap-5">
                            <Label htmlFor="email" className="text-white text-4xl font-semibold tracking-wider">
                                Correo Electrónico
                            </Label>
                            <TextInput
                                id="email"
                                type="email"
                                placeholder="correo@ejemplo.com"
                                value={email}
                                onChange={(e) => setEmail(e.target.value)}
                                required
                                className="focus:ring-4 focus:ring-pink-300 focus:border-pink-400 text-3xl p-6 rounded-2xl"
                            />
                        </div>
                        <div className="flex flex-col gap-5">
                            <Label htmlFor="password" className="text-white text-4xl font-semibold tracking-wider">
                                Contraseña
                            </Label>
                            <TextInput
                                id="password"
                                type="password"
                                placeholder="••••••••"
                                value={password}
                                onChange={(e) => setPassword(e.target.value)}
                                required
                                className="focus:ring-4 focus:ring-pink-300 focus:border-pink-400 text-3xl p-6 rounded-2xl"
                            />
                        </div>
                        <Button
                            type="submit"
                            className="bg-gradient-to-r from-purple-600 via-pink-500 to-yellow-400 text-white font-extrabold py-6 rounded-3xl text-4xl shadow-2xl hover:shadow-yellow-500 hover:scale-110 transition-all duration-300"
                        >
                            Iniciar Sesión
                        </Button>
                    </form>
                </Card>
            </motion.div>
        </div>
    );
}
