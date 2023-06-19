export default class StringHelper {
    // make the first letter of the string uppercase
    public static ucFirst(string: string): string {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
}
