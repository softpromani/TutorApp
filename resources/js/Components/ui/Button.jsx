import React from 'react';

const Button = ({ 
  className = '', 
  text = '', 
  onClick = () => {}, 
  disabled = false, 
  type = 'button', 
  ...props 
}) => {
  return (
    <button
      type={type}
      className={`btn ${className}`}
      onClick={onClick}
      disabled={disabled}
      {...props}
    >
      {text}
    </button>
  );
};


// Default Props
Button.defaultProps = {
  className: '',
  disabled: false,
  type: 'button',
};

export default Button;
