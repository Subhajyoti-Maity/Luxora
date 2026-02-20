# luxora - Premium PHP Website

Welcome to **Luxora**, a modern, elegantly designed premium website built with PHP. This project combines clean, minimal PHP code with a sophisticated user interface featuring luxury branding, dark/light mode support, and professional features.

Originally a simple PHP website for beginners, Luxora has been enhanced with modern design patterns, professional styling, and advanced features while maintaining easy-to-understand code structure.

## Features

### 🎨 Design & UX
- **Premium Navy Blue & Gold Theme** - Elegant color scheme with luxury feel
- **Dark/Light Mode** - Toggle between dark navy and light cream themes with persistent user preference
- **Modern Typography** - Beautiful Playfair Display serif headers and Lato sans-serif body text
- **Font Awesome Icons** - Professional icons throughout the interface

### 🌟 Core Features
- **Featured Sections** - Highlighted content boxes on key pages
- **Benefit Cards Grid** - Showcase key features with icons and hover animations
- **Social Media Integration** - Footer links to Facebook, Twitter, LinkedIn, Instagram
- **Professional Contact Form** - Name, Email, Subject, Message fields
- **Styled Form Elements** - Beautiful form with validation support

Built with modern PHP best practices and professional web design standards. Originally created as an educational project for PHP beginners, evolved into a showcase of professional web development.

### 📱 Pages Included
- **Home** - Welcome page with Luxora brand information, vision, mission, and key benefits
- **About Us** - Company information and story
- **Products** - Product showcase
- **Contact** - Contact information and message form

## Installation & Setup

**GitHub Repository:**
https://github.com/Subhajyoti-Maity/Luxora.git

### Prerequisites
- PHP 7.0 or higher
- Web server (Apache, Nginx, or PHP built-in server)

### Quick Start

1. **Clone or download the project:**
   ```bash
   git clone https://github.com/Subhajyoti-Maity/Luxora.git
   cd luxora
   ```

2. **Run the development server:**
   ```bash
   php -S localhost:8000 -t .
   # Standard way: ensures the current directory is used as the document root, so index.php and all assets are served correctly
   # Run this command from the project root (where index.php is located)
   ```

3. **Open in browser:**
   Navigate to `http://localhost:8000`

luxora/
### Configuration

Edit `includes/config.php` to customize:
- Website name (default: Luxora)
- Site URL
- Navigation menu items
- Content path
- Pretty URLs (requires Apache)

## Project Structure

```
luxora/
├── index.php                # Main entry point
├── readme.md                # Project documentation
├── content/
│   ├── 404.phtml            # 404 error page
│   ├── about-us.phtml       # About page content
│   ├── contact.phtml        # Contact page content
│   ├── home.phtml           # Home page content
│   └── products.phtml       # Products page content
├── includes/
│   ├── config.php           # Site configuration
│   └── functions.php        # Core PHP functions
└── template/
   ├── style.css            # Modern styling
   └── template.php         # Main HTML template
```

luxora/

## Project Structure

```
luxora/
├── index.php                # Main entry point
├── readme.md                # Project documentation
├── content/
│   ├── 404.phtml            # 404 error page
│   ├── about-us.phtml       # About page content
│   ├── contact.phtml        # Contact page content
│   ├── home.phtml           # Home page content
│   └── products.phtml       # Products page content
├── includes/
│   ├── config.php           # Site configuration
│   └── functions.php        # Core PHP functions
└── template/
   ├── style.css            # Modern styling
   └── template.php         # Main HTML template
>>>>>>> 1bd8972 (Update readme: project structure, contact, and support info)
```

## Key Technologies

- **PHP** - Server-side logic and routing
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with gradients, animations, and transitions
- **JavaScript** - Dark mode toggle and interactive features
- **Font Awesome** - Icon library

## Concepts Covered

This project demonstrates:
- **Variables & Arrays** - Configuration and navigation management
- **Functions** - Separation of concerns (display, routing, content)
- **URL Routing** - Query string routing with 404 fallback
- **Template Engine** - Simple template system for consistent layouts
- **Responsive Design** - Mobile-first CSS approach
- **CSS Custom Properties** - Dynamic theming with CSS variables
- **DOM Manipulation** - JavaScript for interactive features
- **Local Storage** - Persistent user preferences

## Customization

### Change Brand Colors
Edit the CSS variables in `template/style.css`:
```css
:root {
   --primary-color: #1a3a52;      /* Navy blue */
   --accent-color: #D4AF37;       /* Gold */
   --text-light: #f5f5f5;         /* Light text */
   --text-dark: #1a3a52;          /* Dark text */
}
```

### Add New Pages
1. Create a new file in `content/` (e.g., `services.phtml`)
2. Add to navigation in `includes/config.php`:
   ```php
   'services' => 'Services',
   ```
3. Edit the page content in your new PHTML file

### Modify Content
Simply edit the `.phtml` files in the `content/` directory to update page content.

## Features & Future Enhancements

### Currently Implemented
✅ Dark/Light mode toggle
✅ Icon support throughout
✅ Professional contact page with form
✅ Responsive design
✅ Breadcrumb navigation
✅ Featured sections
✅ Back to top button
✅ Modern styling

### Possible Enhancements
- Database integration for dynamic content
- Admin panel for content management
- Email form submission
- Blog/News section
- Newsletter signup
- Search functionality
- E-commerce features

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance

- Lightweight and fast-loading
- Minimal external dependencies (Font Awesome CDN only)
- Optimized CSS animations and transitions
- Lazy-load images (optional)

## License

MIT License - Free for personal and commercial use

## Contributing

Contributions are welcome! Feel free to:
- Report bugs
- Suggest improvements
- Submit pull requests
- Share your enhancements

## Support

For questions, feedback, or issues, please use the email address provided on the project's GitHub profile for all contact and support inquiries:
https://github.com/Subhajyoti-Maity/Luxora

## Credits

**Made with ❤️ by Subhajyoti Maity & luxora Team**
