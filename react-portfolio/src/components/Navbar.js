import React from 'react';
import { NavLink } from 'react-router-dom';
import { VscMultipleWindows, VscHome } from 'react-icons/vsc';
import { FaGithub, FaLinkedin, FaRegAddressCard } from 'react-icons/fa'


const Navbar = () => {
  return (
    <div className='sidebar'>
        <div className='id'>
            <div className='idContent'>
                <img src='./media/chattoutnoir.jpg' style={{width:200}} alt='imageprofil'/>
                <h3>Juliette Ancla</h3>
            </div>
        </div>
        <div className='navigation'>
            <ul>
                <li>
                    <NavLink exact to='/' activeClassName='navActive'>
                        <i><VscHome /></i>
                        <span>Accueil</span>
                    </NavLink>
                </li>
                <li>
                    <NavLink exact to='/Portfolio' activeClassName='navActive'>
                        <i><VscMultipleWindows /></i>
                        <span>Réalisations</span>
                    </NavLink>
                </li>
                <li>
                    <NavLink exact to='/Contact' activeClassName='navActive'>
                        <i><FaRegAddressCard /></i>
                        <span>Contact</span>
                    </NavLink>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <a href='https://www.linkedin.com/in/juliette-ancla/' target='_blank' rel="nopemner noreferer noreferrer"><i><FaLinkedin /></i></a>
                <a href='https://github.com/Juliette117/' target='_blank' rel="nopemner noreferer noreferrer"><i><FaGithub /></i></a>
            </ul>
        </div>
    </div>

  )
}

export default Navbar