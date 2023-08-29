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
        },
      },
      backgroundColor: {
        skin: {
          'fill': withOpacity('--color-fill'),
          'accent': withOpacity('--color-fill-accent'),
          'info-hover': withOpacity('--color-fill-info'),
          'info-hover': withOpacity('--color-fill-info-hover'),
          'success': withOpacity('--color-fill-success'),
          'success-hover': withOpacity('--color-fill-success-hover'),
          'warning': withOpacity(' --color-fill-warning'),
          'warning-hover': withOpacity('--color-fill-warning-hover'),
          'danger': withOpacity('--color-fill-danger'),
          'danger-hover': withOpacity('--color-fill-danger-hover'),
      },
      },
      borderColor: {
        skin: {
          'color': withOpacity('--color-border'),
          'footer': withOpacity('--color-border-footer'),
        },
      },
      fill: {
        skin: {
          'icon': withOpacity('--color-fill-icon'),
        },
      },
     },
   },
   darkMode: 'class',
   plugins: [],
 };
