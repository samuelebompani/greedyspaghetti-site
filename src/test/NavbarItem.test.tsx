import NavbarItem from '../components/NavbarItem'

test('cose magiche', () => {
    const mck = jest.fn()
    mck.mockReturnValue("hello").mockReturnValue("he")
    expect(NavbarItem({name: mck(), href: "bar"}))
});