import React from 'react'
import { NavLink } from 'react-router-dom';

const NotFound  = () => {
  return (
    <div>
      <img src={'./media/404.jpeg'} style={{width:700, marginTop:200, marginLeft:600}} alt=" erreur 404"/>
      <div className='navigation'>
        <NavLink exact to='/' activeClassName='navActive'>
          <span>Retourner à la page d'accueil</span>
        </NavLink> 
      </div>
    </div>
    
  )
}

export default NotFound