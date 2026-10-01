import { createRoot } from '@wordpress/element';
import './style.css';

function App() {
    return (
        <div className="my-plugin">

            <header className="my-plugin-header">
                <h1>My Plugin</h1>
                <p>Configure your plugin.</p>
            </header>

            <main className="my-plugin-content">

                <section className="settings-card">
                    <h2>General Settings</h2>

                    <label>
                        Plugin Name
                    </label>

                    <input
                        type="text"
                        placeholder="My Plugin"
                    />

                    <label>
                        Enable Plugin
                    </label>

                    <input type="checkbox" />

                    <button className="save-button">
                        Save Settings
                    </button>
                </section>

            </main>

        </div>
    );
}

const root = document.getElementById('my-plugin-root');

if (root) {
    createRoot(root).render(<App />);
}