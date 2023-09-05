function withOpacity(variableName) {
  return ({ opacityValue }) => {
    if (opacityValue !== undefined) {
      return `rgba(var(${variableName}), ${opacityValue})`
    }
    return `rgb(var(${variableName}))`
  }
}

module.exports = {
  content: require('fast-glob').sync([
     'source/**/*.{blade.php,blade.md,md,html,vue}',
     '!source/**/_tmp/*' // exclude temporary files
   ],{ dot: true }),
   theme: {
     extend: {
      textColor: {
        skin: {
          'brand-primary': withOpacity('--color-brand-primary'),
          'brand-secondary': withOpacity('--color-brand-secondary'),
          'base': withOpacity('--color-text-base'),
          'muted': withOpacity('--color-text-muted'),
          'inverted': withOpacity('--color-text-inverted'),
          'accent': withOpacity('--color-text-accent'),
          'heading': withOpacity('--color-text-heading'),
          'link': withOpacity('--color-text-link'),
          'link-hover': withOpacity('--color-text-link-hover'),
          'header': withOpacity('--color-text-header'),
          'header-muted': withOpacity('--color-text-header-muted'),
          'footer': withOpacity('--color-text-footer'),
          'footer-muted': withOpacity('--color-text-footer-muted'),
        },
      },
      backgroundColor: {
        skin: {
          'base': withOpacity('--color-fill-base'),
          'accent': withOpacity('--color-fill-accent'),
          'header': withOpacity('--color-fill-header'),
          'footer': withOpacity('--color-fill-footer'),
          'info': withOpacity('--color-fill-info'),
          'info-accent': withOpacity('--color-fill-info-accent'),
          'success': withOpacity('--color-fill-success'),
          'success-accent': withOpacity('--color-fill-success-accent'),
          'warning': withOpacity(' --color-fill-warning'),
          'warning-accent': withOpacity('--color-fill-warning-accent'),
          'danger': withOpacity('--color-fill-danger'),
          'danger-accent': withOpacity('--color-fill-danger-accent'),
         
      },
      },
      borderColor: {
        skin: {
          'base': withOpacity('--color-border-base'),
          'muted': withOpacity('--color-border-muted'),
          'footer': withOpacity('--color-border-footer'),
        },
      },
      fill: {
        skin: {
          'brand-primary': withOpacity('--color-brand-primary'),
          'brand-secondary': withOpacity('--color-brand-secondary'),
          'icon': withOpacity('--color-fill-icon'),
        },
      },
     },
   },
   darkMode: 'class',
   plugins: [],
 };
