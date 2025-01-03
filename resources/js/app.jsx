import './bootstrap';
import  '../css/app.css'
import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
    return pages[`./Pages/${name}.jsx`]
  },
  setup({ el, App, props }) {
      // Integrate Flasher notifications
      const { flash } = props.initialPage.props;

      if (flash) {
        flasher.render(flash);
      }
      
    createRoot(el).render(<App {...props} />)
  },
})
